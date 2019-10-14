FROM php:7.3.3-apache
RUN a2enmod rewrite
RUN apt-get update && apt-get upgrade -y
#RUN docker-php-ext-install mysqli
RUN docker-php-ext-install pdo pdo_mysql
EXPOSE 80