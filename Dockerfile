FROM php:8.2-apache

# Instalar dependencias
RUN apt-get update && apt-get install -y \
    zip unzip curl git libzip-dev libpng-dev libonig-dev libxml2-dev \
    libicu-dev \
    && docker-php-ext-install pdo pdo_mysql zip gd intl

# Habilitar mod_rewrite para Laravel
RUN a2enmod rewrite

RUN apt-get update && apt-get install -y \
    libbz2-dev \
    libsodium-dev \
    && docker-php-ext-install bz2 sodium

# Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html
