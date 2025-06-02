FROM php:8.4-fpm-alpine

RUN apk update && apk add --no-cache nodejs npm bash git

WORKDIR /var/www/html

COPY composer.json composer.lock ./
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
RUN composer install --no-dev --prefer-dist --no-interaction

COPY package*.json ./
RUN npm install

COPY . .

ENV CHOKIDAR_USEPOLLING=true
ENV WATCHPACK_POLLING=true

EXPOSE 9000 5173