#!/bin/sh
set -eu

# Octane + FrankenPHP — ProcessMaker (un solo script)
#   sudo ./setup-octane-server.sh           # all
#   sudo ./setup-octane-server.sh install   # octane
#   sudo ./setup-octane-server.sh nginx     # nginx
#   sudo ./setup-octane-server.sh status
#   sudo ./setup-octane-server.sh reload
#
# Env: PM_HOME=/opt/processmaker  PM_USER=nginx  OCTANE_PORT=8001
#      NGINX_SITE_CONF=/etc/nginx/http.d/processmaker.conf

PM_HOME="${PM_HOME:-/opt/processmaker}"
PM_USER="${PM_USER:-nginx}"
PORT="${OCTANE_PORT:-8001}"
HOST="${OCTANE_HOST:-127.0.0.1}"
NGINX="${NGINX_SITE_CONF:-/etc/nginx/http.d/processmaker.conf}"
SUP="${SUPERVISOR_INI:-/etc/supervisor.d/octane.ini}"

run()  { sudo -u "$PM_USER" sh -lc "cd '$PM_HOME' && $*"; }
root() { [ "$(id -u)" = 0 ] || { echo "Use sudo." >&2; exit 1; }; }

patch_nginx_conf() {
    local file="$1" host="$2" port="$3"
    command -v python3 >/dev/null || { echo "ERROR: python3 not found" >&2; return 1; }

    python3 - "$file" "$host" "$port" <<'PY'
import re, sys
path, host, port = sys.argv[1], sys.argv[2], sys.argv[3]
c = open(path, encoding="utf-8").read()

if f"proxy_pass http://{host}:{port}" in c:
    print("already patched")
    sys.exit(0)

proxy = f"""    location / {{
        proxy_pass http://{host}:{port};
        proxy_http_version 1.1;
        proxy_set_header Host $host;
        proxy_set_header X-Real-IP $remote_addr;
        proxy_set_header X-Forwarded-For $proxy_add_x_forwarded_for;
        proxy_set_header X-Forwarded-Proto $scheme;
    }}"""

c, n = re.subn(
    r"location /\s*\{\s*try_files \$uri \$uri/ /index\.php\?\$query_string;\s*\}",
    proxy, c, count=1,
)
if not n:
    print("ERROR: location / block not found", file=sys.stderr)
    sys.exit(1)

c = re.sub(r"try_files \$uri /index\.php;", "try_files $uri =404;", c)

marker = "location ~ \\.php$ {"
if marker in c and "# OCTANE: disabled PHP-FPM" not in c:
    start = c.find(marker)
    depth = end = 0
    for i in range(start, len(c)):
        if c[i] == "{": depth += 1
        elif c[i] == "}":
            depth -= 1
            if depth == 0: end = i + 1; break
    block = c[start:end]
    c = c[:start] + "# OCTANE: disabled PHP-FPM\n" + "\n".join(
        f"# {l}" if l.strip() else "#" for l in block.split("\n")
    ) + c[end:]

open(path, "w", encoding="utf-8").write(c)
print("patched")
PY
}

install() {
    [ -f "$PM_HOME/artisan" ] || { echo "Missing $PM_HOME/artisan" >&2; exit 1; }
    echo ">>> install octane ($PM_USER)"
    run "composer show laravel/octane >/dev/null 2>&1 || composer require laravel/octane:^2.17 --no-interaction"
    run "test -f config/octane.php || php artisan octane:install --server=frankenphp --no-interaction"
    run "grep -q '^OCTANE_SERVER=' .env 2>/dev/null && sed -i.bak 's|^OCTANE_SERVER=.*|OCTANE_SERVER=frankenphp|' .env || echo OCTANE_SERVER=frankenphp >> .env"
    run "APP_RUNNING_IN_CONSOLE=false php artisan route:cache && php artisan config:cache"
    mkdir -p "$PM_HOME/storage/logs"
    chown -R "$PM_USER:$PM_USER" "$PM_HOME/storage" "$PM_HOME/bootstrap/cache" 2>/dev/null || true
}

supervisor() {
    root
    echo ">>> supervisor → $SUP"
    mkdir -p "$(dirname "$SUP")"
    cat > "$SUP" <<EOF
[program:octane]
command = php ${PM_HOME}/artisan octane:start --server=frankenphp --host=${HOST} --port=${PORT}
directory = ${PM_HOME}
user = ${PM_USER}
autostart = true
autorestart = true
startsecs = 0
redirect_stderr = true
stdout_logfile = /dev/stdout
stdout_logfile_maxbytes = 0
EOF
    supervisorctl reread && supervisorctl update && supervisorctl restart octane
}

nginx() {
    root
    [ -f "$NGINX" ] || { echo "Missing $NGINX" >&2; exit 1; }
    echo ">>> nginx → $NGINX"
    bak="${NGINX}.bak.$(date +%s)"
    cp -a "$NGINX" "$bak"
    patch_nginx_conf "$NGINX" "$HOST" "$PORT" || { cp "$bak" "$NGINX"; exit 1; }
    nginx -t && (systemctl reload nginx 2>/dev/null || nginx -s reload) || { cp "$bak" "$NGINX"; exit 1; }
    echo "backup: $bak"
}

case "${1:-all}" in
    install)    install ;;
    supervisor) supervisor ;;
    nginx)      nginx ;;
    patch)      patch_nginx_conf "$NGINX" "$HOST" "$PORT" ;;  # solo parche, para pruebas
    status)
        run "php artisan octane:status --server=frankenphp" || true
        supervisorctl status octane 2>/dev/null || true
        curl -sS -o /dev/null -w "HTTP %{http_code}\n" "http://${HOST}:${PORT}/" 2>/dev/null || true
        ;;
    reload)
        run "php artisan octane:reload --server=frankenphp" 2>/dev/null || { root; supervisorctl restart octane; }
        ;;
    -h|help) echo "Usage: $0 [all|install|supervisor|nginx|status|reload]"; exit 0 ;;
    all) root; install; supervisor; nginx; echo "Done → http://${HOST}:${PORT}" ;;
    *) echo "Usage: $0 [all|install|supervisor|nginx|status|reload]" >&2; exit 1 ;;
esac
