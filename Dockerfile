FROM conectra/nginx-php-fpm

COPY . /var/www/html

WORKDIR /var/www/html
