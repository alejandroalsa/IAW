#!/bin/bash

clear
set -x
source variables.sh

# Activación de modulos necesarios para el Balanceador de Carga de Apache2.4

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

# Copia del archivo de configuración del Servidor Web Apache2.4

    cp ../conf/000-default.conf /etc/apache2/sites-available/000-default.conf

# Remplazo de las variables del archivo de configuración del Servidor Web Apache2.4

    sed -i "s/IP_HTTP_SERVER_01/$IP_HTTP_SERVER_01/" /etc/apache2/sites-available/000-default.conf
    sed -i "s/IP_HTTP_SERVER_02/$IP_HTTP_SERVER_02/" /etc/apache2/sites-available/000-default.conf

# Reinicio del servidor web apache2.4

    systemctl restart apache2.service
