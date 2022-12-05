#!/bin/bash

clear
set -x 
source variables.sh

# <--------------------------------------------------------->
# Instalación herramientas adicionales pila LAMP
# <--------------------------------------------------------->

    # Instalación wget
        dnf install wget -y

    # Descarga de phpmyadmin
        wget https://www.phpmyadmin.net/downloads/phpMyAdmin-latest-all-languages.tar.gz -y

    # Descompresión del archivo el archivo
        tar xvf phpMyAdmin-latest-all-languages.tar.gz

    # Movimiento de los archivos a /usr/share/phpmyadmin
        mv phpMyAdmin-5.2.0-all-languages/ /usr/share/phpmyadmin

    # Eliminación de .gz
        rm phpMyAdmin-latest-all-languages.tar.gz

    # Creación de un directorio temporal
        mkdir -p /var/lib/phpmyadmin/tmp

    # Asignación de permisos
        chmod 777 /var/lib/phpmyadmin/tmp

    # Asignación de usuario y grupo
        chown -R apache:apache /var/lib/phpmyadmin

    # Creación de un directorio de configuración
        mkdir /etc/phpmyadmin/

    # Creación de archivo de configuración
        cp ../conf/phpmyadmin.conf  /usr/share/phpmyadmin/config.inc.php

    # Instalación de Politicas Python
        yum install -y policycoreutils-python-utils

    # Añadir phpmyadmin a apache
        semanage fcontext -a -t httpd_sys_rw_content_t '/usr/share/phpmyadmin/'
        semanage fcontext -a -t httpd_sys_rw_content_t '/var/lib/phpmyadmin/'
        restorecon -Rv '/usr/share/phpmyadmin'

    # Selección de la contraseña de root en mysql 
        mysqladmin -u root password $password

    # Creación de un archivo de configuración apache
        cp ../scripts/conf/phpmyadmin.conf /etc/httpd/conf.d/

    # Creación de un directorio para Adminer
        mkdir /var/www/html/adminer && cd /var/www/html/adminer

    # Descarga de Adminer
        wget -O index.php https://github.com/vrana/adminer/releases/download/v4.8.1/adminer-4.8.1-en.php -y

    # Asignación de permisos
        chmod -R 775 /var/www/html/adminer/

    # Asignación de usuario y grupo
        chown -R apache:apache index.php /var/www/html/adminer/

    # Reinicio del servidor web Apache2.4
        systemctl restart httpd

# <--------------------------------------------------------->
# Instalación herramientas adicionales pila LAMP
# <--------------------------------------------------------->
