# BASE STAGE
FROM php:7.4.29-apache as base

# install extensions
RUN pecl install xdebug \
    && docker-php-ext-install mysqli pdo pdo_mysql \
    && docker-php-ext-enable xdebug mysqli

# modify config
RUN echo "xdebug.mode=debug" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.client_host=host.docker.internal" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.client_port=9003" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.start_with_request=yes" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "file_uploads=On" >> /usr/local/etc/php/conf.d/file-upload.ini \
    && echo "upload_tmp_dir=/tmp" >> /usr/local/etc/php/conf.d/file-upload.ini

EXPOSE 80 9003
WORKDIR /var/www/html/

# PRODUCTION STAGE
FROM base as production
COPY . /var/www/html/
