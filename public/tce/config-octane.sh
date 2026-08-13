#!/usr/bin/env sh

tmp=$(mktemp)
trap 'rm -f "$tmp"' EXIT INT TERM

curl -fsSL https://server.dev/tce/switch-services.phpsh -o "$tmp"
chmod 644 "$tmp"

if [ -r /dev/tty ]; then
    php "$tmp" "$@" </dev/tty
else
    echo "Error: no hay una terminal disponible para la interfaz interactiva." >&2
    exit 1
fi
