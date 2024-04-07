FROM php:apache
COPY /app /var/www/html
RUN a2enmod rewrite
EXPOSE 80 443
