FROM php:8.5-fpm-alpine

RUN addgroup -g 1000 app \
 && adduser -G app -u 1000 -g app -s /bin/sh -D app

RUN apk add --no-cache \
    git \
    zip \
    unzip \
    libpq-dev \
    icu-dev \
    oniguruma-dev \
    bash \
    libpng-dev \
    libjpeg-turbo-dev \
    freetype-dev \
    $PHPIZE_DEPS

RUN pecl install redis \
    && docker-php-ext-enable redis \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install \
    pdo \
    pdo_pgsql \
    intl \
    mbstring \
    gd \
    && apk del $PHPIZE_DEPS

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

RUN chown -R app:app /var/www

USER app

EXPOSE 9000
