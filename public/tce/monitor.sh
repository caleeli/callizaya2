#!/usr/bin/env sh

while true; do
  date -u +"%Y-%m-%dT%H:%M:%SZ"
  SCRIPT_NAME=/fpm-status \
  SCRIPT_FILENAME=/fpm-status \
  REQUEST_METHOD=GET \
  cgi-fcgi -bind -connect 127.0.0.1:9000 \
  | egrep 'listen queue:|idle processes:|active processes:|total processes:|max children reached:|slow requests:|accepted conn:'
  echo "----"
  sleep 1
done
