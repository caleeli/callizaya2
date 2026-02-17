#!/usr/bin/env sh

SCRIPT_NAME=/fpm-status \
SCRIPT_FILENAME=/fpm-status \
REQUEST_METHOD=GET \
cgi-fcgi -bind -connect 127.0.0.1:9000
