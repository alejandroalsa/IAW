#!/bin/bash
clear
set -x
source variables.sh

# Eliminacion del directorio iaw-practica-lamp por si ya existiera
    rm -rf /tmp/iaw-practica-lamp

# Clonacion del repositorio
    git clone https://github.com/josejuansanchez/iaw-practica-lamp.git /tmp/iaw-practica-lamp

# Movimiento del codigo fuente a /var/www/html
    mv /tmp/iaw-practica-lamp/src/* /var/www/html

# Modificacion de propietario y grupo para todos los archivos de /var/www/html
    chown www-data:www-data /var/www/html -R

# Eliminacion del archivo por defecto de Apache2.4
    rm /var/www/html/index.html

# Configuracion de variables para la conexion con mysql
    sed -i "s/localhost/$DB_PRIVATE_IP/" /var/www/html/config.php
    sed -i "s/lamp_db/$DB_NAME/" /var/www/html/config.php
    sed -i "s/lamp_user/$DB_USER/" /var/www/html/config.php
    sed -i "s/lamp_password/$DB_PASS/" /var/www/html/config.php
