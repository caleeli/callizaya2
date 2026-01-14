#!/usr/bin/env bash
set -e

BRANCH=$1

cd /opt/processmaker/vendor/processmaker/package-plg

if [ -n "$BRANCH" ]; then
  git fetch origin
  git checkout "$BRANCH"
fi

git pull

cd /opt/processmaker
php artisan config:clear
php artisan config:cache
php artisan package-plg:install
APP_RUNNING_IN_CONSOLE=false php artisan route:clear
APP_RUNNING_IN_CONSOLE=false php artisan route:cache
