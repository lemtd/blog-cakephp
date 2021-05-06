FROM webdevops/php-apache:7.3
WORKDIR /app
COPY . /app
EXPOSE 80