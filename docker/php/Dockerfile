FROM php:7.4-fpm

ENV LANG de_DE.UTF-8
ENV LANGUAGE de_DE:de  
ENV LC_ALL de_DE.UTF-8

ARG USERNAME=pbe
ARG USER_UID=1000
ARG USER_GID=$USER_UID

RUN apt-get update \
    && apt-get install -y git unzip g++ zlib1g-dev libicu-dev libxml2-dev locales sudo\
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN docker-php-ext-install pdo_mysql \
    && docker-php-ext-install mysqli \
    && docker-php-ext-install json \
    && docker-php-ext-install intl \
    && docker-php-ext-install soap \
    && docker-php-ext-install xml \
    && pecl install xdebug \
    && docker-php-ext-enable xdebug \
    && pecl install redis \
    && docker-php-ext-enable redis

RUN echo "de_DE.UTF-8 UTF-8" >> /etc/locale.gen && locale-gen

RUN groupadd --gid $USER_GID $USERNAME \
    && useradd -s /bin/bash --uid $USER_UID --gid $USER_GID -m $USERNAME \
    && echo $USERNAME ALL=\(root\) NOPASSWD:ALL > /etc/sudoers.d/$USERNAME\
    && chmod 0440 /etc/sudoers.d/$USERNAME

USER $USERNAME

WORKDIR /var/www/html

CMD [ "php-fpm" ]
