#!/bin/sh
docker run -it --rm -v /home:/home -w $PWD php:8.0-fpm-buster php $@