#!/bin/bash
set -x
clear
source ../variables.sh

# Actualización de repositorios
    apt-get update

# Actualización los paquetes nuevos
    apt-get upgrade -y

# Instalamos el servidor web de apache
    apt-get install apache2 -y

# Activamos los modulos para configurar Apache como proxy inverso
    a2enmod proxy
    a2enmod proxy_http
    a2enmod proxy_ajp
    a2enmod rewrite
    a2enmod deflate
    a2enmod headers
    a2enmod proxy_balancer
    a2enmod proxy_connect
    a2enmod proxy_html
    a2enmod lbmethod_byrequests

# Copiamos el archivo de configuración de apache
    cp ../../conf/000-default.conf /etc/apache2/sites-available/000-default.conf

# Reemplazamos las variables del archivo de configuración
    sed -i "s/IP_HTTP_SERVER_1/$IP_HTTP_SERVER_1/" /etc/apache2/sites-available/000-default.conf
    sed -i "s/IP_HTTP_SERVER_2/$IP_HTTP_SERVER_2/" /etc/apache2/sites-available/000-default.conf

# Reinicio del servidor web Apache2.4
    systemctl restart apache2
