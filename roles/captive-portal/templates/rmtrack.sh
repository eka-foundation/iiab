#!/bin/bash 
  /usr/sbin/conntrack -L  |grep $1  |grep ESTAB  |grep dport=80 |awk  '{ system("conntrack -D --orig-src "substr($5,5)" --orig-dst "  substr($6,5) " -p tcp --orig-port-src " substr($7,7)  "--orig-port-dst 80i"); }' 2>&1 1> /dev/null
