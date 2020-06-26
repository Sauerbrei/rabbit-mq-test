FROM php:fpm-alpine
WORKDIR /srv/api
RUN apk --update add libsodium libsodium-dev
RUN docker-php-ext-install pdo_mysql sockets bcmath sodium
COPY --from=composer /usr/bin/composer /usr/bin/composer
CMD composer install --no-ansi --no-dev --no-interaction --no-plugins --no-progress --no-scripts --no-suggest --optimize-autoloader
CMD bin/console doctrine:migrations:migrate
CMD php-fpm
EXPOSE 9000
