FROM php:8.1.0alpha3-fpm-alpine
RUN docker-php-ext-install pdo pdo_mysql