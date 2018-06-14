#!/bin/bash

for(( i=0;i<1000;i++ ))
do
	php artisan db:seed --class=$1
done
