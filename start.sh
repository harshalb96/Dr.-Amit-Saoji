#!/bin/bash

# Set Apache to listen on the port provided by Render
sed -i "s/80/$PORT/g" /etc/apache2/sites-available/000-default.conf
sed -i "s/80/$PORT/g" /etc/apache2/ports.conf

# Generate application key if not set
if [ -z "$APP_KEY" ]; then
    php artisan key:generate --no-interaction
fi

# Run database migrations if needed (uncomment if you have a database)
php artisan migrate --force

# Start Apache in foreground
apache2-foreground
