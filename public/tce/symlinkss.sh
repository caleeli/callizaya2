cd /opt/processmaker
git fetch
#cp composer.json storage/composer.json.bak
#cp composer.lock storage/composer.lock.bak
git restore composer.json composer.lock resources/js/requests/components/RequestScreens.vue resources/js/requests/components/screenDetail.vue resources/jscomposition/cases/casesDetail/components/DisplayForm.vue
git fetch
git checkout feature/FOUR-26166-b
cp storage/composer.json.bak composer.json
cp storage/composer.lock.bak composer.lock
git branch

cd /opt/packages
git clone --branch feature/FOUR-26166-integration https://github.com/ProcessMaker/package-savedsearch.git
cd /opt/processmaker/vendor/processmaker
rm -rf package-savedsearch
ln -s /opt/packages/package-savedsearch package-savedsearch


cd /opt/processmaker
composer config --global --auth http-basic.processmaker.repo.packagist.com token 0df7b369d295c842dae46a40f7b694399e9f5d1b45d167e807afdb26424d
composer require justinrainbow/json-schema:^6.5