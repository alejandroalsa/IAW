#!/bin/bash

. ./../variables/variables.sh

# <--------------------------------------------------------->
# Instalacion de Prestashop
# <--------------------------------------------------------->

    # Instalacion de prereguisitos

        apt-get install libapache2-mod-php7.3 php7.3 php7.3-common php7.3-curl php7.3-gd php7.3-imagick php7.3-mbstring php7.3-mysql php7.3-json php7.3-xsl php7.3-intl php7.3-zip -y

        apt-get install php-bcmath php-patchwork-utf8 php-imagick php-intl php-json php-mbstring php-memcache php-memcached php-simplexml php-zip -y

    # Configuracion de la base de datos

        mysql -u root <<< "DROP DATABASE IF EXISTS $PS_BASEDATOS"

        mysql -u root <<< "CREATE DATABASE $PS_BASEDATOS CHARACTER SET utf8mb4"

        mysql -u root <<< "CREATE USER '$PS_USUARIO_BASEDATOS'@'127.0.0.1' IDENTIFIED BY '$PS_CONTTASENA_BASEDATOS'"

        mysql -u root <<< "GRANT ALL PRIVILEGES ON $PS_BASEDATOS.* TO '$PS_USUARIO_BASEDATOS'@'127.0.0.1'"

        mysql -u root <<< "FLUSH PRIVILEGES"

     # Activacionde modulos necasarios para apache

        a2enmod alias env headers rewrite

     # Configuracion de PHP

        sed -i 's/;max_input_vars = 1000/max_input_vars = 5000/' /etc/php/8.1/apache2/php.ini
        sed -i 's/memory_limit = 128M/memory_limit = 256M/' /etc/php/8.1/apache2/php.ini
        sed -i 's/post_max_size = 8M/post_max_size = 128M/' /etc/php/8.1/apache2/php.ini
        sed -i 's/upload_max_filesize = 2M/upload_max_filesize = 128M/' /etc/php/8.1/apache2/php.ini

    # Descargamos Prestashop

        wget -P /tmp https://github.com/PrestaShop/PrestaShop/releases/download/8.0.0/prestashop_8.0.0.zip

        unzip /tmp/prestashop_8.0.0.zip -d /var/www/$DIRECTORIOPRESTASHOP

        unzip /var/www/$DIRECTORIOPRESTASHOP/prestashop.zip -d /var/www/$DIRECTORIOPRESTASHOP

        chown www-data:www-data /var/www/$DIRECTORIOPRESTASHOP/ -R
        
    # Activamos el Virtual Hosting

        a2dissite 000-default.conf
        a2dissite 000-default-le-ssl.conf

        cp ../conf/prestashop.conf /etc/apache2/sites-available/

        a2ensite prestashop.conf

        systemctl reload apache2.service

    # Configuramos el instalador de Prestashop

        php /var/www/$DIRECTORIOPRESTASHOP/install/index_cli.php \
            --language=$PS_IDIOMA \
            ---name=$PS_NOMBRE \
            --country=$PS_PAIS \
            --timezone=$PS_ZONA_HORARIA \
            --firstname=$PS_NOMBRE_ADMINISTRADOR \
            --lastname=$PS_APELLIDO_ADMINISTRADOR \
            --email=$PS_EMAIL \
            --password=$PS_PASSWORD \
            --db_server=$PS_IP_BASEDATOS \
            --db_user=$PS_USUARIO_BASEDATOS \
            --db_password=$PS_CONTTASENA_BASEDATOS \
            --db_name=$PS_BASEDATOS \
            --domain=$PS_DOMINIO \
            --ssl=$PS_SSL

        rm -rf /var/www/$DIRECTORIOPRESTASHOP/install


        a2ensite 000-default-le-ssl.conf

        a2ensite prestashop.conf

        systemctl reload apache2.service

# <--------------------------------------------------------->
# Instalacion de Prestashop
# <--------------------------------------------------------->
