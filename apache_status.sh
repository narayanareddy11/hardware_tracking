#!/bin/bash
expression=`sudo /opt/lampp/xampp status | grep "not running"`
echo $expression

if [ -z "$expression" ]
then
	echo "lamp server is runnig"
else
	echo "lamp server is not running"
	expression=`sudo /opt/lampp/xampp start | grep "not running"`
	echo "================ RESTART SERVER =================== "
	sleep 5
	expression1=`sudo /opt/lampp/xampp status | grep "running"`
	echo $expression1
	
fi
