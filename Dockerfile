FROM php:8.2-cli

# Cài extension
RUN apt-get update && apt-get install -y \
    unzip curl git \
    && docker-php-ext-install pdo pdo_mysql

# Cài composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /app

COPY . .

RUN composer install

EXPOSE 8000

CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]