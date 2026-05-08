cd /opt/processmaker
sudo -u nginx git fetch
#sudo -u nginx cp composer.json storage/composer.json.bak
#sudo -u nginx cp composer.lock storage/composer.lock.bak
sudo -u nginx git restore composer.json composer.lock resources/js/requests/components/RequestScreens.vue resources/js/requests/components/screenDetail.vue resources/jscomposition/cases/casesDetail/components/DisplayForm.vue
sudo -u nginx git fetch
sudo -u nginx git checkout feature/FOUR-26166-b
sudo -u nginx cp storage/composer.json.bak composer.json
sudo -u nginx cp storage/composer.lock.bak composer.lock
sudo -u nginx git branch

cd /opt/packages
sudo -u nginx git clone --branch feature/FOUR-26166-integration https://github.com/ProcessMaker/package-savedsearch.git
cd /opt/processmaker/vendor/processmaker
rm -rf package-savedsearch
ln -s /opt/packages/package-savedsearch package-savedsearch


cd /opt/processmaker
sudo -u nginx composer config --global --auth http-basic.processmaker.repo.packagist.com token 0df7b369d295c842dae46a40f7b694399e9f5d1b45d167e807afdb26424d
sudo -u nginx composer require justinrainbow/json-schema:^6.5