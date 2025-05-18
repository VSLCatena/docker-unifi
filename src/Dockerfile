FROM php:8-apache
#
# User Actions
#

# RUN mkdir /var/www/html


#
# Install core 
#

# run apt-get update && apt-get install -y \
# unzip \
# curl 

#
# Add files
#

COPY html/ /var/www/html/
RUN chown -R www-data:www-data /var/www/html/data

#
# Setup persistent volumes
#

VOLUME ["/var/www/html"]

#
# Change defaults
#

# WORKDIR /var/www/html
# USER www-data
# CMD ["apache2-foreground"]

