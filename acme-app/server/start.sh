#!/bin/sh

podman run -it --rm -p 8080:80 -v ./src:/var/www/html docker.io/php:8.1.17-apache