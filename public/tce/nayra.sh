#!/usr/bin/env bash

docker pull processmaker4dev/nayra-engine:next
docker stop pm4_tce-eng_nayra
docker rm pm4_tce-eng_nayra

sudo -u nginx APP_RUNNING_IN_CONSOLE=false php artisan route:clear
sudo -u nginx APP_RUNNING_IN_CONSOLE=false php artisan route:cache
sudo -u nginx php artisan config:clear
sudo -u nginx php artisan config:cache
sudo -u nginx php artisan package-plg:install

