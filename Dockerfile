FROM php:8.3-fpm

# Prévenir les prompts interactifs
ENV DEBIAN_FRONTEND=noninteractive

# Installer dépendances système et extensions PHP
RUN apt-get update && apt-get install -y --no-install-recommends \
    git \
    curl \
    unzip \
    zip \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    libicu-dev \
    g++ \
    && docker-php-ext-configure intl \
    && docker-php-ext-install intl pdo_mysql mbstring zip opcache bcmath \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Installer Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Répertoire de travail
WORKDIR /var/www

# Copier projet
COPY . .

# Installer dépendances Laravel
RUN composer install --no-dev --optimize-autoloader --ignore-platform-reqs

# Permissions
RUN chown -R www-data:www-data /var/www \
    && chmod -R 755 /var/www/storage

# Exposer le port (pas obligatoire mais propre)
EXPOSE 8000

# ✅ Correction ici : syntaxe shell pour expansion variable $PORT
CMD php artisan serve --host=0.0.0.0 --port=$PORT
