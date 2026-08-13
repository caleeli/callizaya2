#!/usr/bin/env sh

tmp=$(mktemp)
curl -fsSL https://server.dev/tce/switch-services.phpsh -o "$tmp"
chmod 644 "$tmp"

php "$tmp"

rm -f "$tmp"
