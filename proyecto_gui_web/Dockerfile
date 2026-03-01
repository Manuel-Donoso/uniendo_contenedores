FROM php:8.2-apache

# Esta es la línea mágica que instala y activa el conector MySQL
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# Reiniciamos Apache para que reconozca el cambio
RUN apachectl restart
