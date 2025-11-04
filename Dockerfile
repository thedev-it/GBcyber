FROM php:8.3-fpm

# Éviter les prompts
ENV DEBIAN_FRONTEND=noninteractive

# Installer dépendances système + extensions PHP
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

# Installer dépendances Laravel sans dev
RUN composer install --no-dev --optimize-autoloader --ignore-platform-reqs

# ⚠️ Générer APP_KEY si pas encore présent
RUN php artisan key:generate --force || true

# ✅ Mettre en cache la config Laravel (important sur Render)
RUN php artisan config:clear && php artisan config:cache

# Permissions
RUN chown -R www-data:www-data /var/www \
    && chmod -R 755 /var/www/storage \
    && chmod -R 755 /var/www/bootstrap/cache

# Exposer le port demandé par Render (env $PORT)
EXPOSE 8000

# ✅ Commande finale – Render injecte $PORT automatiquement
CMD php artisan serve --host=0.0.0.0 --port=$PORT
