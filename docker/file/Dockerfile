FROM namoshek/php-mssql:7.4-fpm

RUN apt-get update && apt-get install -y \
    git \
    curl \
    zip \
    unzip

# Key might change in the future, replace with new one on the logs
RUN apt-key adv --keyserver keyserver.ubuntu.com --recv-keys BA6932366A755776
RUN apt-get update
RUN apt-get install -y software-properties-common
RUN add-apt-repository ppa:deadsnakes/ppa
RUN apt-get update

RUN ACCEPT_EULA=Y apt-get install -y msodbcsql17 mssql-tools
RUN apt-get install unixodbc-dev

COPY ./php/config/php.ini /usr/local/etc/php/php.ini

WORKDIR /var/www/html