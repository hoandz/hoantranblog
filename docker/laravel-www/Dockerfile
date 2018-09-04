FROM php:7.2-apache-stretch

COPY docker/vhost.conf /etc/apache2/sites-available/000-default.conf
COPY docker/start.sh /usr/local/bin/start

RUN chown -R www-data:www-data /var/www/html \
	&& a2enmod rewrite \
	&& chmod u+x /usr/local/bin/start \
	&& docker-php-ext-install pdo pdo_mysql \
	&& apt-get update \
    && apt-get install -y zlib1g-dev libpng-dev \
    && rm -rf /var/lib/apt/lists/* \
    && docker-php-ext-install zip gd

CMD ["/usr/local/bin/start"]
