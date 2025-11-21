#!/usr/bin/env bash
set -e  # hace que el script falle ante el primer error

cd /opt/processmaker/vendor/processmaker/package-plg
git pull

cd /opt/processmaker
php artisan package-plg:install
APP_RUNNING_IN_CONSOLE=false php artisan route:clear
APP_RUNNING_IN_CONSOLE=false php artisan route:cache
