#!/usr/bin/env bash
BRANCH=$1

cd /opt/processmaker

# backup composer.json and composer.lock
cp composer.json composer.json.backup
cp composer.lock composer.lock.backup
git restore composer.json composer.lock
git checkout "$BRANCH"
cp composer.json.backup composer.json
cp composer.lock.backup composer.lock
