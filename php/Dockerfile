FROM php:7-apache

RUN apt-get update && \
  apt-get install -y \
  libfreetype6-dev \
  libjpeg62-turbo-dev \
  libmcrypt-dev \
  libpng12-dev && \
  docker-php-ext-install pdo pdo_mysql mbstring gd iconv mcrypt