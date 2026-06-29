#!/bin/sh
#
# Instala Laravel Octane (FrankenPHP) en ProcessMaker
# Compatible con /bin/sh (Alpine, contenedores sin bash)
#
# Uso:
#   sudo sh setup-octane-server.sh          # instala todo
#   sudo sh setup-octane-server.sh install  # paso 1: octane
#   sudo sh setup-octane-server.sh supervisor
#   sudo sh setup-octane-server.sh nginx
#   sudo sh setup-octane-server.sh status
#
set -eu

PM_HOME="${PM_HOME:-/opt/processmaker}"
PM_USER="${PM_USER:-nginx}"
PORT="${OCTANE_PORT:-8001}"
HOST="${OCTANE_HOST:-127.0.0.1}"
NGINX="${NGINX_SITE_CONF:-/etc/nginx/http.d/processmaker.conf}"
SUP="${SUPERVISOR_INI:-/etc/supervisor.d/octane.ini}"

# Ejecuta comando en ProcessMaker como usuario nginx
as_nginx() {
    sudo -u "$PM_USER" sh -c "cd '$PM_HOME' && $*"
}

need_sudo() {
    if [ "$(id -u)" -ne 0 ]; then
        echo "Ejecuta con sudo: sudo sh $0 $1"
        exit 1
    fi
}

nginx_ready() {
    grep -q "proxy_pass http://${HOST}:${PORT}" "$1" 2>/dev/null
}

# --- Paso 1: Octane ---
step_install() {
    echo ""
    echo "=== Paso 1: Octane ==="

    if [ ! -f "$PM_HOME/artisan" ]; then
        echo "Error: no existe $PM_HOME/artisan"
        exit 1
    fi

    as_nginx "composer show laravel/octane >/dev/null 2>&1 || composer require laravel/octane:^2.17 --no-interaction"
    as_nginx "test -f config/octane.php || php artisan octane:install --server=frankenphp --no-interaction"
    as_nginx "grep -q '^OCTANE_SERVER=' .env 2>/dev/null && sed -i.bak 's|^OCTANE_SERVER=.*|OCTANE_SERVER=frankenphp|' .env || echo OCTANE_SERVER=frankenphp >> .env"
    as_nginx "APP_RUNNING_IN_CONSOLE=false php artisan route:cache"
    as_nginx "php artisan config:cache"
    chown -R "$PM_USER:$PM_USER" "$PM_HOME/storage" "$PM_HOME/bootstrap/cache" 2>/dev/null || true
    echo "OK"
}

# --- Paso 2: Supervisor ---
step_supervisor() {
    need_sudo supervisor
    echo ""
    echo "=== Paso 2: Supervisor ==="

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

    supervisorctl reread
    supervisorctl update
    supervisorctl restart octane
    echo "OK"
}

# --- Paso 3: Nginx ---
# Cambia: location / → proxy_pass | PHP-FPM → comentado | assets → =404
step_nginx_patch() {
    python3 - "$1" "$HOST" "$PORT" <<'EOF'
import re, sys
conf, host, port = sys.argv[1], sys.argv[2], sys.argv[3]
text = open(conf, encoding="utf-8").read()
proxy = f"""    location / {{
        proxy_pass http://{host}:{port};
        proxy_http_version 1.1;
        proxy_set_header Host $host;
        proxy_set_header X-Real-IP $remote_addr;
        proxy_set_header X-Forwarded-For $proxy_add_x_forwarded_for;
        proxy_set_header X-Forwarded-Proto $scheme;
    }}"""
text, ok = re.subn(r"location /\s*\{\s*try_files \$uri \$uri/ /index\.php\?\$query_string;\s*\}", proxy, text, count=1)
if not ok:
    print("Error: bloque location / no encontrado", file=sys.stderr)
    sys.exit(1)
text = re.sub(r"try_files \$uri /index\.php;", "try_files $uri =404;", text)
marker = "location ~ \\.php$ {"
if marker in text and "# OCTANE: disabled PHP-FPM" not in text:
    start = text.find(marker)
    depth = 0
    for i in range(start, len(text)):
        if text[i] == "{": depth += 1
        elif text[i] == "}":
            depth -= 1
            if depth == 0:
                block = text[start:i + 1]
                commented = "# OCTANE: disabled PHP-FPM\n" + "\n".join(
                    f"# {line}" if line.strip() else "#" for line in block.split("\n")
                )
                text = text[:start] + commented + text[i + 1:]
                break
open(conf, "w", encoding="utf-8").write(text)
EOF
}

step_nginx() {
    need_sudo nginx
    echo ""
    echo "=== Paso 3: Nginx ==="

    if [ ! -f "$NGINX" ]; then
        echo "Error: no existe $NGINX"
        exit 1
    fi

    if nginx_ready "$NGINX"; then
        echo "Ya apunta a Octane (${HOST}:${PORT}). Nada que hacer."
        return 0
    fi

    backup="${NGINX}.bak.$(date +%s)"
    cp -a "$NGINX" "$backup"
    echo "Backup: $backup"

    if ! step_nginx_patch "$NGINX"; then
        cp "$backup" "$NGINX"
        echo "Error: parche falló"
        exit 1
    fi

    if ! nginx -t; then
        cp "$backup" "$NGINX"
        echo "Error: nginx -t falló"
        exit 1
    fi

    if command -v systemctl >/dev/null 2>&1; then
        systemctl reload nginx 2>/dev/null || nginx -s reload
    else
        nginx -s reload
    fi

    echo "OK"
}

step_status() {
    echo ""
    echo "=== Estado ==="
    as_nginx "php artisan octane:status --server=frankenphp" 2>/dev/null || echo "Octane: no corre"
    supervisorctl status octane 2>/dev/null || echo "Supervisor: no disponible"
    curl -sS -o /dev/null -w "HTTP Octane: %{http_code}\n" "http://${HOST}:${PORT}/" 2>/dev/null \
        || echo "HTTP: sin respuesta"
}

step_reload() {
    if as_nginx "php artisan octane:reload --server=frankenphp" 2>/dev/null; then
        echo "Octane recargado"
    else
        need_sudo reload
        supervisorctl restart octane
        echo "Supervisor reiniciado"
    fi
}

step_patch() {
    if nginx_ready "$NGINX"; then
        echo "ya parcheado"
        exit 0
    fi
    step_nginx_patch "$NGINX"
}

# --- Main ---
cmd="${1:-all}"

case "$cmd" in
    install)    step_install ;;
    supervisor) step_supervisor ;;
    nginx)      step_nginx ;;
    status)     step_status ;;
    reload)     step_reload ;;
    patch)      step_patch ;;
    all)
        need_sudo all
        step_install
        step_supervisor
        step_nginx
        echo ""
        echo "Listo → http://${HOST}:${PORT}"
        ;;
    -h|help)
        echo "Uso: sudo sh $0 [all|install|supervisor|nginx|status|reload]"
        ;;
    *)
        echo "Uso: sudo sh $0 [all|install|supervisor|nginx|status|reload]"
        exit 1
        ;;
esac
