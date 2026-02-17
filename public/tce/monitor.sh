#!/usr/bin/env sh

while true; do
  echo "---- $(date -u +'%F %T') ----"
  SCRIPT_NAME=/fpm-status \
  SCRIPT_FILENAME=/fpm-status \
  REQUEST_METHOD=GET \
  cgi-fcgi -bind -connect 127.0.0.1:9000 2>/dev/null \
    | egrep 'start since:|accepted conn:|listen queue:|max listen queue:|idle processes:|active processes:|total processes:|max active processes:|max children reached:|slow requests:'
  sleep 1
done
