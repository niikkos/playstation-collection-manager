FROM php:8-fpm-alpine

# Installer les dépendances nécessaires pour Composer et PHP
RUN apk add --no-cache curl

# Télécharger et installer Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
