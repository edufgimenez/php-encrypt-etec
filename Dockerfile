FROM php:8.2-cli

RUN docker-php-ext-install pdo pdo_mysql

COPY . /var/www/html

WORKDIR /var/www/html

EXPOSE 10000

CMD ["php", "-S", "0.0.0.0:10000", "-t", "."]
