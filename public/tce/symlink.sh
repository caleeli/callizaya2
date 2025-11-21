#!/usr/bin/env bash
BRANCH=$1

cd /opt/packages

if [ -n "$BRANCH" ]; then
  git clone -b "$BRANCH" https://github.com/ProcessMaker/package-plg.git
else
  git clone https://github.com/ProcessMaker/package-plg.git
fi

cd /opt/processmaker/vendor/processmaker/
rm -Rf package-plg
ln -s /opt/packages/package-plg package-plg

cd /opt/processmaker
php artisan package-plg:install
APP_RUNNING_IN_CONSOLE=false php artisan route:clear
APP_RUNNING_IN_CONSOLE=false php artisan route:cache
