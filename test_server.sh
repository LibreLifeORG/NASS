#!/bin/sh 

url="localhost:8000"

librewolf $url
cd ./src; php -S $url
