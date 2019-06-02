#!/bin/sh
msg="$@"
echo $msg
curl 'https://api.twilio.com/2010-04-01/Accounts/AC26cabf8d3904739ba01b0de6023332da/Messages.json' -X POST --data-urlencode 'To=+61422547422' --data-urlencode 'From=+61480019456' --data-urlencode "Body=$msg" -u AC26cabf8d3904739ba01b0de6023332da:afc8c0ed38cdef578be8a779a7555aec
