#!/usr/bin/env sh

tmp=$(mktemp)
cleanup() {
    rm -f "$tmp"
}

trap cleanup EXIT
trap 'exit 130' INT
trap 'exit 143' TERM

curl -fsSL https://processmaker4.dev/tce/switch-services.phpsh -o "$tmp"
chmod 644 "$tmp"

if [ -r /dev/tty ]; then
    php "$tmp" "$@" </dev/tty
    status=$?
    exit "$status"
else
    echo "Error: no hay una terminal disponible para la interfaz interactiva." >&2
    exit 1
fi
