#!/bin/bash

# Set Apache to listen on the port provided by Render
sed -i "s/80/$PORT/g" /etc/apache2/sites-available/000-default.conf
sed -i "s/80/$PORT/g" /etc/apache2/ports.conf

# Generate application key if not set
if [ -z "$APP_KEY" ]; then
    php artisan key:generate --no-interaction
fi

# Force Laravel to log to stderr so errors appear in Render logs
export LOG_CHANNEL=stderr

# Run database migrations if needed (uncomment if you have a database)
php artisan migrate --force

# Dump a quick boot-check to see any fatal errors immediately
php artisan about || true

# Start Apache in foreground
apache2-foreground
