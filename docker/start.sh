#!/usr/bin/env bash

set -e

role=${CONTAINER_ROLE:-app}
env=${APP_ENV:-production}

if [ $env != "local" ]; then
  echo "Caching configuration..."
  (cd /var/www/html && php artisan config:cache && php artisan route:cache && php artisan view:cache)
fi

# Just run the app
if [ "$role" = "app" ]; then
  exec apache2-foreground

# Run as queue
elif [ "$role" = "queue" ]; then
  echo "Running the queue..."
  php /var/www/html/artisan queue:work --verbose --tries=3 --timeout=90
	exit 1

# Run as scheduler
elif [ "$role" = "scheduler" ]; then
	while [ true ]
	do
		php /var/www/html/artisan schedule:run --verbose --no-interaction &
		sleep 60
	done
	exit 1
else
	echo "Could not match the container role \"$role\""
	exit 1

fi