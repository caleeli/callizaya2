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