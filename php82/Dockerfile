# php82/Dockerfile
FROM php:8.2-apache

# 1. Instala dependências do sistema (bibliotecas que o PHP usa para compilar as extensões)
RUN apt-get update && apt-get install -y \
    libicu-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    zip \
    unzip \
    git \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# 2. Instala e habilita as extensões do PHP
# O 'intl' é obrigatório para o CodeIgniter 4
RUN docker-php-ext-configure intl \
    && docker-php-ext-install intl pdo_mysql gd zip opcache

# 3. Habilita o mod_rewrite do Apache (essencial para as rotas do CI4)
RUN a2enmod rewrite

WORKDIR /var/www/html

# Ajusta as permissões para o Apache conseguir ler os arquivos
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80