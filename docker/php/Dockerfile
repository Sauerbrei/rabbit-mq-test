FROM php:fpm-alpine
WORKDIR /srv/api
RUN apk --update --nocache add libsodium libsodium-dev
RUN docker-php-ext-install pdo_mysql sockets bcmath sodium
COPY --from=composer /usr/bin/composer /usr/bin/composer
CMD composer install ; bin/console doctrine:migrations:migrate ;  php-fpm
EXPOSE 9000
