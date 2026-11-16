#!/bin/bash
set -e

# Render provides $PORT (default to 80 if not provided)
export PORT="${PORT:-80}"

# Configure Apache port dynamically
echo "Listen ${PORT}" > /etc/apache2/ports.conf

# 1. Ensure .env exists inside container
if [ ! -f /var/www/html/.env ]; then
    if [ -f /var/www/html/.env.example ]; then
        cp /var/www/html/.env.example /var/www/html/.env
    else
        touch /var/www/html/.env
    fi
fi

# 2. Configure App environment defaults
APP_ENV="${APP_ENV:-production}"
APP_DEBUG="${APP_DEBUG:-false}"
sed -i "/^APP_ENV=/d" /var/www/html/.env || true
sed -i "/^APP_DEBUG=/d" /var/www/html/.env || true
echo "APP_ENV=${APP_ENV}" >> /var/www/html/.env
echo "APP_DEBUG=${APP_DEBUG}" >> /var/www/html/.env

# 3. Ensure APP_KEY exists
if [ -n "$APP_KEY" ]; then
    sed -i "/^APP_KEY=/d" /var/www/html/.env || true
    echo "APP_KEY=${APP_KEY}" >> /var/www/html/.env
elif ! grep -q '^APP_KEY=base64:' /var/www/html/.env; then
    php artisan key:generate --force || true
fi

# 4. Configure Database (SQLite zero-config default or MySQL/TiDB Cloud)
DB_CONNECTION="${DB_CONNECTION:-sqlite}"
sed -i "/^DB_CONNECTION=/d" /var/www/html/.env || true
echo "DB_CONNECTION=${DB_CONNECTION}" >> /var/www/html/.env

if [ "$DB_CONNECTION" = "sqlite" ]; then
    mkdir -p /var/www/html/database
    if [ ! -f /var/www/html/database/database.sqlite ]; then
        touch /var/www/html/database/database.sqlite
    fi
    chown -R www-data:www-data /var/www/html/database
    chmod 775 /var/www/html/database
    chmod 664 /var/www/html/database/database.sqlite
elif [ "$DB_CONNECTION" = "mysql" ]; then
    sed -i "/^DB_HOST=/d" /var/www/html/.env || true
    sed -i "/^DB_PORT=/d" /var/www/html/.env || true
    sed -i "/^DB_DATABASE=/d" /var/www/html/.env || true
    sed -i "/^DB_USERNAME=/d" /var/www/html/.env || true
    sed -i "/^DB_PASSWORD=/d" /var/www/html/.env || true
    sed -i "/^MYSQL_ATTR_SSL_CA=/d" /var/www/html/.env || true

    echo "DB_HOST=${DB_HOST:-127.0.0.1}" >> /var/www/html/.env
    echo "DB_PORT=${DB_PORT:-3306}" >> /var/www/html/.env
    echo "DB_DATABASE=${DB_DATABASE:-laravel}" >> /var/www/html/.env
    echo "DB_USERNAME=${DB_USERNAME:-root}" >> /var/www/html/.env
    echo "DB_PASSWORD=${DB_PASSWORD:-}" >> /var/www/html/.env
    echo "MYSQL_ATTR_SSL_CA=${MYSQL_ATTR_SSL_CA:-/etc/ssl/certs/ca-certificates.crt}" >> /var/www/html/.env
fi

# 5. Ensure writable storage and cache directories exist with proper permissions
mkdir -p /var/www/html/storage/framework/cache/data \
         /var/www/html/storage/framework/sessions \
         /var/www/html/storage/framework/views \
         /var/www/html/storage/logs \
         /var/www/html/bootstrap/cache \
         /var/www/html/database
chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache /var/www/html/database /var/www/html/.env
chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache /var/www/html/database
chmod 664 /var/www/html/.env

# 6. Ensure storage symlink exists
if [ ! -L "/var/www/html/public/storage" ]; then
    php artisan storage:link || true
fi

# 7. Run migrations (enabled by default for zero-config Render deployment)
RUN_MIGRATIONS="${RUN_MIGRATIONS:-true}"
if [ "$RUN_MIGRATIONS" = "true" ]; then
    echo "Running database migrations..."
    php artisan migrate --force || true
    if [ "$DB_CONNECTION" = "sqlite" ] && [ -f /var/www/html/database/database.sqlite ]; then
        chown www-data:www-data /var/www/html/database/database.sqlite
        chmod 664 /var/www/html/database/database.sqlite
    fi
fi

# 8. Clear and discover Laravel caches
php artisan package:discover --ansi || true
php artisan config:clear || true
php artisan route:clear || true
php artisan view:clear || true

echo "==> Application ready. Starting Apache web server on port ${PORT}..."
exec apache2-foreground
