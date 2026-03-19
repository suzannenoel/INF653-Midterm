FROM php:8.2-apache

RUN apt-get update && apt-get install -y libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql opcache

RUN a2enmod rewrite headers

RUN sed -i 's/AllowOverride None/AllowOverride All/g' /etc/apache2/apache2.conf

RUN echo 'Header edit Location ^http:// https://' >> /etc/apache2/apache2.conf

RUN echo 'opcache.enable=1\nopcache.memory_consumption=128\nopcache.max_accelerated_files=10000\nopcache.revalidate_freq=60' >> /usr/local/etc/php/conf.d/opcache.ini

COPY . /var/www/html/

EXPOSE 80
