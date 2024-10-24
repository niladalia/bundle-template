FROM php:8.2-fpm

# Install necessary extensions and Symfony CLI
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libicu-dev \
    libzip-dev \
    && docker-php-ext-install intl zip

RUN curl -sS https://get.symfony.com/cli/installer | bash

WORKDIR /app

COPY . /app

# Install composer dependencies
RUN curl -sS https://getcomposer.org/installer | php && \
    php composer.phar install

EXPOSE 8000

