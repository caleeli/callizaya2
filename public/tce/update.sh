#!/usr/bin/env bash
set -e

BRANCH=$1

cd /opt/processmaker/vendor/processmaker/package-plg

if [ -n "$BRANCH" ]; then
  git fetch origin
  git checkout "$BRANCH"
fi

git pull

composer config repositories.package-plg path "/opt/packages/package-plg"

cd /opt/processmaker
composer require processmaker/package-plg
php artisan config:clear
php artisan config:cache
php artisan package-plg:install
APP_RUNNING_IN_CONSOLE=false php artisan route:clear
APP_RUNNING_IN_CONSOLE=false php artisan route:cache
