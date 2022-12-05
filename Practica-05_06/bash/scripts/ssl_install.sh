#!/bin/bash

. ./../variables/variables.sh

set -x

# <-------------------------------------------------->
# Instalacion de Cerbot
# <-------------------------------------------------->

     # Instalacion y actualizacion de snapd
        snap install core; sudo snap refresh core
    
     # Eliminamos (si existe) la instalacion de cerbot
        apt-get remove certbot 

     # Instalamos Cerbot
        snap install --classic certbot

     # Creamos un alias para cerbot
        ln -s /snap/bin/certbot /usr/bin/certbot
    
     # Obtencion del certificado SSL y configuracion de servidor web.
        certbot --apache -m $PS_EMAIL --agree-tos --no-eff-email -d $PS_DOMINIO
        
# <-------------------------------------------------->
# Instalacion de Cerbot
# <-------------------------------------------------->

# <-------------------------------------------------->
# Configuracion del Virtual Host de Apache2
# <-------------------------------------------------->

                mkdir /var/www/$DIRECTORIOPRESTASHOP/

        # Modificacion del VirtualHost *:80

                sed -i 's/alejandroalfaroshop.sytes.net/'$DOMINIO'/' /etc/apache2/sites-available/prestashop.conf
                sed -i 's/alejandro@alejnadroalsa.es/'$PS_EMAIL'/' /etc/apache2/sites-available/prestashop.conf
                sed -i 's/prestashop/'$DIRECTORIOPRESTASHOP'/' /etc/apache2/sites-available/prestashop.conf

        # Modificacion del VirtualHost *:443


                sed -i 's/alejandroalfaroshop.sytes.net/'$DOMINIO'/' /etc/apache2/sites-available/000-default-le-ssl.conf
                sed -i 's/webmaster@localhost/'$PS_EMAIL'/' /etc/apache2/sites-available/000-default-le-ssl.conf
                sed -i 's/html/'$DIRECTORIOPRESTASHOP'/' /etc/apache2/sites-available/000-default-le-ssl.conf

# <-------------------------------------------------->
# Configuracion del Virtual Host de Apache2
# <-------------------------------------------------->
