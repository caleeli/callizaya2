#!/usr/bin/env bash
cd /opt/packages
git clone https://github.com/ProcessMaker/package-plg.git
cd /opt/processmaker/vendor/processmaker/
rm -Rf package-plg
ln -s /opt/packages/package-plg package-plg