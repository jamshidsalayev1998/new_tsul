#!/bin/bash

# Install dependencies if vendor directory is missing
if [ ! -d "vendor" ]; then
    composer install --no-interaction --optimize-autoloader --no-dev
fi

# Set permissions (essential for server deployment)
echo "Setting directory permissions..."
chown -R www-data:www-data storage bootstrap/cache
chmod -R 775 storage bootstrap/cache

# Wait for MySQL to be ready
echo "Waiting for database (db:3306)..."
while ! nc -z db 3306; do
  sleep 1
done
echo "Database is up!"

# Run migrations
echo "Running migrations..."
php artisan migrate --force

# Start PHP-FPM
echo "Starting PHP-FPM..."
exec php-fpm
