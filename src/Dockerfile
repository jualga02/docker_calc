#ESTE DOCKERFILE DEBE SER MODIFICADO con el path de la app desplegada


FROM php:8.3-apache
# Instala y habilita la extensión mysqli
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
COPY . /var/www/html/docker_calc