FROM php:7.4-apache
# Install system dependencies
RUN apt-get update && apt-get install -y \
    ca-certificates \
    fuse3 \
    sqlite3 \
    libsqlite3-dev \
    libzip-dev \
    libonig-dev \
    libxml2-dev \
    libcurl4-openssl-dev \
    zip \
    unzip \
    git \
    && rm -rf /var/lib/apt/lists/*

COPY --from=flyio/litefs:0.5 /usr/local/bin/litefs /usr/local/bin/litefs

# Install PHP extensions
RUN docker-php-ext-install pdo_sqlite zip mbstring xml curl

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set working directory
WORKDIR /var/www/html

# Copy application files
COPY . .

# Create db directory and set permissions
# RUN mkdir -p /var/www/html/db && chown -R www-data:www-data /var/www/html/db

# Set COMPOSER_ALLOW_SUPERUSER
ENV COMPOSER_ALLOW_SUPERUSER=1

# Install dependencies
# RUN composer install --no-interaction --no-plugins --no-scripts
RUN composer install --no-interaction

# Set permissions for the entire application
RUN chown -R www-data:www-data /var/www/html

# Create a startup script
RUN echo '#!/bin/bash\n\
apache2-foreground' > /usr/local/bin/start.sh && \
    chmod +x /usr/local/bin/start.sh

# Expose port 8081
EXPOSE 8082

# Start Apache server
# CMD ["litefs mount"]
# CMD ["apache2-foreground"]
CMD ["/usr/local/bin/start.sh"]