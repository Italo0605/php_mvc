FROM php:7.4-apache
ENV TZ=America/Sao_Paulo
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone
RUN a2enmod rewrite
RUN docker-php-ext-install pdo pdo_mysql
COPY www/ /var/www/html
