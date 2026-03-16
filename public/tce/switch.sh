#!/usr/bin/env bash
set -e
set -x
BRANCH=$1

cd /opt/processmaker

# backup composer.json and composer.lock (only if backup doesn't exist)
if [[ ! -f composer.json.backup ]]; then cp composer.json composer.json.backup; fi
if [[ ! -f composer.lock.backup ]]; then cp composer.lock composer.lock.backup; fi
git restore composer.json composer.lock
git checkout "$BRANCH"
cp composer.json.backup composer.json
cp composer.lock.backup composer.lock
