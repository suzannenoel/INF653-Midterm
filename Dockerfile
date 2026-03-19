FROM php:8.2-apache

RUN apt-get update && apt-get install -y libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql

RUN a2enmod rewrite headers

RUN sed -i 's/AllowOverride None/AllowOverride All/g' /etc/apache2/apache2.conf

RUN echo 'Header edit Location ^http:// https://' >> /etc/apache2/apache2.conf

COPY . /var/www/html/

EXPOSE 80
