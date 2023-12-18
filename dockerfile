FROM php:7.4-apache

COPY src/ /var/www/html
COPY pdf/ /var/www/html/pdf

RUN apt-get update \
    && apt-get install -y libzip-dev \
    && docker-php-ext-install zip
