#!/bin/bash

clear

set -x

# Variables de configuración



# <--------------------------------------------------------->
# Instalamos herramientas adicionales para la pila LAMP
# <--------------------------------------------------------->

    # Configuramos las repuestas de phpmyAdmin
    echo "phpmyadmin phpmyadmin/reconfigure-webserver multiselect apache2" | debconf-set-selections
    echo "phpmyadmin phpmyadmin/dbconfiguring-install boolean true" | debconf-set-selections
    echo "phpmyadmin phpmyadmin/mysql/app-pass password $PHPMYADMIN_PASSWORD" | debconf-set-selections
    echo "phpmyadmin phpmyadmin/app-password-confirm password $PHPMYADMIN_PASSWORD" | debconf-set-selections

    # Instalamos phpmyAdmin
    apt install phpmyadmin php-mbstring php-zip php-gd php-json php-curl -y

# <--------------------------------------------------------->
# Instalamos herramientas adicionales para la pila LAMP
# <--------------------------------------------------------->

    # <---------------------------->
    # Instalamos Adminer
    # <---------------------------->

        # Descargamos el archivo de Adminer
        wget https://github.com/vrana/adminer/releases/download/v4.8.1/adminer-4.8.1-mysql.php

        # Creamos un directorio para Adminer
        mkdir -p /var/www/html/adminer

        # Movemos y renombramos a Adminer
        mv adminer-4.8.1-mysql.php  /var/www/html/adminer/index.php

    # <---------------------------->
    # Instalamos Adminer
    # <---------------------------->



    # <---------------------------->
    # Instalamos GoAccess
    # <---------------------------->

        # Añadimos el repositorio de GoAccess
        echo "deb http://deb.goaccess.io/ $(lsb_release -cs) main" > /etc/apt/sources.list.d/goaccess.list

        # Añadimos la clave publica de GoAccess
        wget -O - https://deb.goaccess.io/gnugpg.key | sudo apt-key add -

        # Actualizamos los repositorios
        apt-get update

        # Instalamos GoAccess
        apt-get install goaccess -y    

        # Creamos un directorio para la estadisticas
        mkdir /var/www/html/stats/

        # Agregamos al usuario www-data a la carpeta /var/www/html
        chown www-data:www-data /var/www/html -R

        # Por ultimo ejecutamos GooAccess en segundo plano 
        goaccess /var/log/apache2/access.log -o /var/www/html/stats/index.html --log-format=COMBINED --real-time-html --daemonize

    # <---------------------------->
    # Instalamos GoAccess
    # <---------------------------->



    # <------------------------------------------------------------->
    # Control de acceso a un directorio con autenticación básica
    # <------------------------------------------------------------->
        # Creamos el directorio para almacenar el fichero de las calves
        mkdir -p /etc/apache2/claves

        # Creamos a los usuario/contraseñas en un archivo
        htpasswd -bc /etc/apache2/claves/.htpasswd $STATS_USER_1 $STATS_PASSWORD_USER_1
        htpasswd -b /etc/apache2/claves/.htpasswd $STATS_USER_2 $STATS_PASSWORD_USER_2
        
        #Copiamos el archivo htaccess en 
        cp../htaccess/htaccess /var/www/html/stats/.htaccess

        #Copiamos el archivo de configuracion de Apache
        cp../conf/000-default-htaccess.conf /etc/apache2/sites-available/000-default.conf

        #Reiniciamos apache
        systemctl restart apache2.service

    # <------------------------------------------------------------->
    # Control de acceso a un directorio con autenticación básica
    # <------------------------------------------------------------->

# <--------------------------------------------------------->
# Instalamos herramientas adicionales para la pila LAMP
# <--------------------------------------------------------->