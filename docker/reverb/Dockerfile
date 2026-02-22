FROM php:8.5-fpm-alpine

RUN apk add --no-cache \
    libpq-dev \
    icu-dev \
    oniguruma-dev \
    $PHPIZE_DEPS

RUN pecl install redis \
    && docker-php-ext-enable redis \
    && docker-php-ext-install \
    pdo \
    pdo_pgsql \
    intl \
    mbstring \
    pcntl \
    && apk del $PHPIZE_DEPS

WORKDIR /var/www

EXPOSE 8080

CMD ["php", "artisan", "reverb:start", "--host=0.0.0.0", "--port=8080", "--debug"]
