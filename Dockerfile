FROM php:8.5-apache

# Install prerequisites
RUN apt-get update && apt-get install -y git unzip

# Composer
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

# Copy files
COPY . /var/www/html
WORKDIR /var/www/html

# Apache config
RUN a2enmod rewrite
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

ENV SERVER_NAME=${SERVER_NAME}
RUN echo "ServerName \${SERVER_NAME}" > /etc/apache2/conf-available/servername.conf
RUN a2enconf servername
    
# Composer install
RUN composer install --no-dev --optimize-autoloader