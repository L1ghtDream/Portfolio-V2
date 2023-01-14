# syntax=docker/dockerfile:1
FROM trafex/php-nginx
WORKDIR /home/lightdream/web/website
COPY . /var/www/html
