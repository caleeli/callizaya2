#!/usr/bin/env sh
set -e

sudo -u nginx APP_RUNNING_IN_CONSOLE=false php artisan route:clear
sudo -u nginx APP_RUNNING_IN_CONSOLE=false php artisan route:cache
sudo -u nginx php artisan config:clear
sudo -u nginx php artisan config:cache

# review LOG_LEVEL at .env
cat .env | grep LOG_LEVEL
if ! grep -q "^LOG_LEVEL=error" .env; then
  echo "LOG_LEVEL must be error"
fi

# review PRODUCT_ANALYTICS_INTERCOM_ENABLED at .env
cat .env | grep PRODUCT_ANALYTICS_INTERCOM_ENABLED
if ! grep -q "^PRODUCT_ANALYTICS_INTERCOM_ENABLED=false" .env; then
  echo "PRODUCT_ANALYTICS_INTERCOM_ENABLED must be false"
fi

# review at /etc/php83/php-fpm.d/processmaker.conf
# pm.start_servers = 8
# pm.min_spare_servers = 4
# pm.max_spare_servers = 12
# pm.max_children = 24
# pm.max_requests = 1000

if ! grep -q "^pm.start_servers = 8" /etc/php83/php-fpm.d/processmaker.conf; then
  echo "pm.start_servers must be 8"
fi
if ! grep -q "^pm.min_spare_servers = 4" /etc/php83/php-fpm.d/processmaker.conf; then
  echo "pm.min_spare_servers must be 4"
fi
if ! grep -q "^pm.max_spare_servers = 12" /etc/php83/php-fpm.d/processmaker.conf; then
  echo "pm.max_spare_servers must be 12"
fi
if ! grep -q "^pm.max_children = 24" /etc/php83/php-fpm.d/processmaker.conf; then
  echo "pm.max_children must be 24"
fi
if ! grep -q "^pm.max_requests = 1000" /etc/php83/php-fpm.d/processmaker.conf; then
  echo "pm.max_requests must be 1000"
fi
