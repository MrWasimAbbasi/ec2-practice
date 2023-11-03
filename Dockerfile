# Use the official PHP image
FROM php:8.0-apache

# Copy your PHP files into the container
COPY . /var/www/html/

# Expose the Apache port
EXPOSE 80

# Start Apache
CMD ["apache2-foreground"]
