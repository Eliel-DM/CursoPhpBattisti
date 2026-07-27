FROM php:8.2-apache

# Instala e ativa a extensão do MySQL
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli