FROM php:7.3-apache

RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

ENV PORT 9000

EXPOSE 9000

ENTRYPOINT []

CMD sed -i "s/80/$PORT/g" /etc/apache2/sites-available/000-default.conf /etc/apache2/ports.conf && docker-php-entrypoint apache2-foreground
