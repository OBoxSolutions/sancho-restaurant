FROM php:7.4-apache

# Install required packages
RUN apt-get update && apt-get install -y \
    libpq-dev \
    libzip-dev \
    && apt-get clean && rm -rf /var/lib/apt/lists/* \
    && a2enmod rewrite \
    && docker-php-ext-install zip


# Copy Laravel app files
COPY . /var/www/html

# Set write permissions for storage and bootstrap/cache directories
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Change working directory to Laravel app root
WORKDIR /var/www/html

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
    && composer install --no-dev --optimize-autoloader

# Expose port 80 for Apache
EXPOSE 80