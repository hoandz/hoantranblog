FROM ubuntu:latest

WORKDIR /app

RUN apt-get update \
	&& apt-get install -y curl \
	&& apt-get install -my gnupg \
	&& curl -sL https://deb.nodesource.com/setup_8.x | bash - \
	&& apt-get install -y nodejs \
	&& apt-get install -y gcc make libpng-dev

COPY docker/laravel-webpack/start.sh /usr/local/bin/start
RUN chmod u+x /usr/local/bin/start

CMD ["/usr/local/bin/start"]