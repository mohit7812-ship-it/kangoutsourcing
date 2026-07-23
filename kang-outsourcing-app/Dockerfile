# ---- Stage 1: Build frontend assets (Vite + Tailwind) ----
FROM node:20-alpine AS node-build
WORKDIR /app
COPY package.json package-lock.json* ./
RUN npm install
COPY . .
RUN npm run build

# ---- Stage 2: PHP application ----
FROM php:8.4-cli AS app

# System deps + PHP extensions Laravel needs
RUN apt-get update && apt-get install -y \
    git unzip libzip-dev libpng-dev libonig-dev libxml2-dev sqlite3 libsqlite3-dev \
    && docker-php-ext-install pdo pdo_sqlite mbstring exif pcntl bcmath gd zip \
    && rm -rf /var/lib/apt/lists/*

# Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Install PHP deps first (better layer caching)
COPY composer.json composer.lock ./
RUN composer install --no-dev --no-scripts --no-autoloader --prefer-dist

# Copy app code
COPY . .

# Bring in built frontend assets from stage 1
COPY --from=node-build /app/public/build ./public/build

# Ensure SQLite db file + writable dirs exist (must happen BEFORE composer
# dump-autoload, since Laravel's package:discover script needs bootstrap/cache)
RUN mkdir -p database && touch database/database.sqlite \
    && mkdir -p storage/framework/{cache,sessions,views} storage/logs bootstrap/cache \
    && chmod -R 775 storage bootstrap/cache database

# Finish composer setup
RUN composer dump-autoload --optimize

# Cache Laravel config/routes/views for production
RUN php artisan config:clear

EXPOSE 10000

# Render sets $PORT; default to 10000 for local testing
# Recreate storage/cache dirs at container start too (belt-and-suspenders,
# in case the runtime environment resets permissions/paths from the build).
CMD mkdir -p storage/framework/cache storage/framework/sessions storage/framework/views storage/logs bootstrap/cache database && \
    touch database/database.sqlite && \
    chmod -R 775 storage bootstrap/cache database && \
    php artisan migrate --force && \
    php artisan config:cache && \
    php artisan route:cache && \
    php artisan view:cache && \
    php artisan serve --host=0.0.0.0 --port=${PORT:-10000}
