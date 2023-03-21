FROM namoshek/php-mssql:7.4-fpm

RUN apt-get update && apt-get install -y \
    git \
    curl \
    zip \
    unzip

COPY ./php/config/php.ini /usr/local/etc/php/php.ini

WORKDIR /var/www/html