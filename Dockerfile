FROM php:8.2-fpm

# Install ekstensi yang dibutuhkan Laravel
RUN docker-php-ext-install pdo pdo_mysql

# (Opsional) Install ekstensi tambahan Laravel
#RUN docker-php-ext-install bcmath mbstring

WORKDIR /var/www
