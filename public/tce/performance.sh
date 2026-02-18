#!/usr/bin/env sh
set -e

# Ensure we're in the project root (where .env and artisan live)
if [ ! -f .env ] || [ ! -f artisan ]; then
  echo "❌ Run this script from the project root (where .env and artisan exist)"
  exit 1
fi

# Set env vars in .env (run as nginx to preserve ownership)
set_env_var() {
  var="$1"
  value="$2"
  if grep -q "^${var}=" .env 2>/dev/null; then
    sudo -u nginx sed -i "s|^${var}=.*|${var}=${value}|" .env
    echo "✅ ${var} set to ${value}"
  else
    echo "${var}=${value}" | sudo -u nginx tee -a .env > /dev/null
    echo "✅ ${var} added as ${value}"
  fi
}

set_env_var "LOG_LEVEL" "error"
set_env_var "PRODUCT_ANALYTICS_INTERCOM_ENABLED" "false"
set_env_var "PRODUCT_ANALYTICS_LOGROCKET_ENABLED" "false"

# install qa light license
sudo -u nginx php artisan processmaker:license-update https://callizaya.com/tce/qaLicense.json

# Rebuild config cache with updated env values
sudo -u nginx php artisan config:clear
sudo -u nginx php artisan config:cache

# clear and cache routes
sudo -u nginx APP_RUNNING_IN_CONSOLE=false php artisan route:clear
sudo -u nginx APP_RUNNING_IN_CONSOLE=false php artisan route:cache

# Update /etc/php83/php-fpm.d/processmaker.conf with recommended settings (only when nginx is present)
# pm.start_servers = 8, pm.min_spare_servers = 4, pm.max_spare_servers = 12
# pm.max_children = 24, pm.max_requests = 1000

PHPFPM_CONF="/etc/php83/php-fpm.d/processmaker.conf"
if pgrep nginx >/dev/null 2>&1 && [ -f "$PHPFPM_CONF" ]; then
  PHPFPM_CHANGED=0
  set_phpfpm() {
    key="$1"
    value="$2"
    if grep -qE "^[[:space:]]*${key}[[:space:]]*=" "$PHPFPM_CONF" 2>/dev/null; then
      if ! grep -qE "^[[:space:]]*${key}[[:space:]]*=[[:space:]]*${value}[[:space:]]*$" "$PHPFPM_CONF"; then
        sudo sed -i "s|^[[:space:]]*${key}[[:space:]]*=[[:space:]]*.*|${key} = ${value}|" "$PHPFPM_CONF"
        echo "✅ ${key} set to ${value}"
        PHPFPM_CHANGED=1
      fi
    else
      echo "${key} = ${value}" | sudo tee -a "$PHPFPM_CONF" > /dev/null
      echo "✅ ${key} added as ${value}"
      PHPFPM_CHANGED=1
    fi
  }
  set_phpfpm "pm.start_servers" "4"
  set_phpfpm "pm.min_spare_servers" "2"
  set_phpfpm "pm.max_spare_servers" "6"
  set_phpfpm "pm.max_children" "12"
  set_phpfpm "pm.max_requests" "1000"

  if [ "$PHPFPM_CHANGED" = 1 ]; then
    supervisorctl restart all
  fi
fi
