#!/usr/bin/env bash
BRANCH=$1

cd /opt/packages

if [ -d "package-plg" ] && [ -n "$(ls -A package-plg 2>/dev/null)" ]; then
  echo "package-plg already exists and is not empty, skipping clone"
else
  if [ -n "$BRANCH" ]; then
    git clone -b "$BRANCH" https://github.com/ProcessMaker/package-plg.git
  else
    git clone https://github.com/ProcessMaker/package-plg.git
  fi
fi

cd /opt/processmaker/vendor/processmaker/
rm -Rf package-plg
ln -s /opt/packages/package-plg package-plg

composer config repositories.package-plg path "/opt/packages/package-plg"

cd /opt/processmaker
composer require processmaker/package-plg
php artisan config:clear
php artisan config:cache
php artisan package-plg:install
APP_RUNNING_IN_CONSOLE=false php artisan route:clear
APP_RUNNING_IN_CONSOLE=false php artisan route:cache
