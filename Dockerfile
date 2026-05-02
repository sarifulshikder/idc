FROM php:8.2-apache

RUN docker-php-ext-install pdo pdo_mysql mysqli

# Enable mod_rewrite
RUN a2enmod rewrite

# Copy vhost config
COPY apache-vhost.conf /etc/apache2/sites-available/000-default.conf

WORKDIR /var/www/html
