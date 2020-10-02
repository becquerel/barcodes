FROM php:7.4-fpm

# packages
RUN apt-get update \
  && DEBIAN_FRONTEND=noninteractive apt-get install -y --no-install-recommends \
  # needed for gd
  libfreetype6-dev \
  libjpeg62-turbo-dev \
  libpng-dev \
  git \
  libzip4 \
  libzip-dev \
  unzip \
  && rm -rf /var/lib/apt/lists/*

# PHP extensions
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
  && docker-php-ext-install -j "$(nproc)" gd

RUN docker-php-ext-configure zip && docker-php-ext-install -j "$(nproc)" zip

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer