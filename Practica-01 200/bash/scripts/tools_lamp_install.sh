#!/bin/bash

clear
set -x
source variables.sh

# <--------------------------------------------------------->
# Instalación herramientas adicionales pila LAMP
# <--------------------------------------------------------->

    # Configuracion repuestas de phpmyadmin
    echo "phpmyadmin phpmyadmin/reconfigure-webserver multiselect apache2" | debconf-set-selections
    echo "phpmyadmin phpmyadmin/dbconfiguring-install boolean true" | debconf-set-selections
    echo "phpmyadmin phpmyadmin/mysql/app-pass password $PHPMYADMIN_PASSWORD" | debconf-set-selections
    echo "phpmyadmin phpmyadmin/app-password-confirm password $PHPMYADMIN_PASSWORD" | debconf-set-selections

    # Instalación phpmyadmin
    apt install phpmyadmin php-mbstring php-zip php-gd php-json php-curl -y

    # <---------------------------->
    # Instalación Adminer
    # <---------------------------->

        # Descarga del archivo de Adminer
        wget https://github.com/vrana/adminer/releases/download/v4.8.1/adminer-4.8.1-mysql.php

        # Creación de directorio para Adminer
        mkdir -p /var/www/html/adminer

        # Mover y renombrar adminer-4.8.1-mysql.php -> index.php
        mv adminer-4.8.1-mysql.php  /var/www/html/adminer/index.php

    # <---------------------------->
    # Instalación Adminer
    # <---------------------------->

    # <---------------------------->
    # Instalación GoAccess
    # <---------------------------->

        # Añadir repositorio de GoAccess
        echo "deb http://deb.goaccess.io/ $(lsb_release -cs) main" > /etc/apt/sources.list.d/goaccess.list

        # Añadir la clave publica de GoAccess
        wget -O - https://deb.goaccess.io/gnugpg.key | sudo apt-key add -

        # Actualizar los repositorios
        apt-get update

        # Instalación GoAccess
        apt-get install goaccess -y    

        # Creación de un directorio para la estadisticas
        mkdir /var/www/html/stats/

        # Agregar al usuario y grupo www-data a la carpeta /var/www/html
        chown www-data:www-data /var/www/html -R

        # Ejecución de GooAccess en segundo plano 
        goaccess /var/log/apache2/access.log -o /var/www/html/stats/index.html --log-format=COMBINED --real-time-html --daemonize

    # <---------------------------->
    # Instalación GoAccess
    # <---------------------------->

    # <------------------------------------------------------------->
    # Control de acceso a un directorio con autenticación básica
    # <------------------------------------------------------------->
        # Creacion del directorio para almacenar el fichero de las calves
        mkdir -p /etc/apache2/keys

        # Creamos a los usuario/contraseñas en un archivo
        htpasswd -bc /etc/apache2/keys/.htpasswd $STATS_USER_1 $STATS_PASSWORD_USER_1
                
        # Copia de archivo htaccess en /var/www/html/###/.htaccess
        cp ../conf/htaccess /var/www/html/stats/.htaccess

        # Copia de archivo de configuracion de Apache
        cp ../conf/000-default.conf /etc/apache2/sites-available/000-default.conf

        # Reinicio Apache
        systemctl restart apache2.service

    # <------------------------------------------------------------->
    # Control de acceso a un directorio con autenticación básica
    # <------------------------------------------------------------->

# <--------------------------------------------------------->
# Instalación herramientas adicionales pila LAMP
# <--------------------------------------------------------->
