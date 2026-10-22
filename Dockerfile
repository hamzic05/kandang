
FROM php:8.3-cli-bookworm

# Install dependencies sistem
RUN apt-get update && apt-get install -y \
    git \
    curl \
    unzip \
    zip \
    libzip-dev \
    libicu-dev \
    libonig-dev \
    libxml2-dev \
    libssl-dev \
    && docker-php-ext-install -j$(nproc) \
        pdo_mysql \
        mbstring \
        zip \
        intl \
        bcmath \
        pcntl \
        sockets \
        opcache \
    && rm -rf /var/lib/apt/lists/*

# Install Composer 2
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Direktori kerja Laravel
WORKDIR /var/www/html

# Port Laravel
EXPOSE 8000

# Menjalankan Laravel development server
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
