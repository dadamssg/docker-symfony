FROM jtreminio/php-nginx:7.3

RUN apt-get update && apt-get install -y \
        libpq-dev \
        libmcrypt-dev \
        php7.3-pgsql

RUN ln -s /etc/php/${PHP_VER}/mods-available/pdo_pgsql.ini /etc/php/${PHP_VER}/cli/conf.d/20-pdo_pgsql.ini
RUN ln -s /etc/php/${PHP_VER}/mods-available/pdo_pgsql.ini /etc/php/${PHP_VER}/fpm/conf.d/20-pdo_pgsql.ini