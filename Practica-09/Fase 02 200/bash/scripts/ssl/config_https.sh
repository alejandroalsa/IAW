#!/bin/bash
set -x
clear
source ../variables.sh

# <-------------------------------------------------->
# Instalación de Certbot
# <-------------------------------------------------->

    # Instalación y actualización de snapd
        snap install core; sudo snap refresh core
    
    # Eliminación en el caso de que exista la instalación de Certbot
        apt-get remove certbot

    # Instalación de Certbot
        snap install --classic certbot

    # Creación de un alias para Certbot
        ln -s /snap/bin/certbot /usr/bin/certbot
    
    # Obtención del certificado SSL y configuración de servidor web.
        certbot --apache -m $EMAIL --agree-tos --no-eff-email -d $DOMAIN
        
# <-------------------------------------------------->
# Instalacion de Certbot
# <-------------------------------------------------->
