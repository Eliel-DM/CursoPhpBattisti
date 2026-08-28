FROM php:8.2-apache

# Instala as extensoes pdo_mysql e mysqli (caso tambem use mysqli no curso)
RUN docker-php-ext-install pdo_mysql mysqli