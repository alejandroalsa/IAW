#!/bin/bash

clear
set -x

# Actualización de repositorios
    apt-get update

# Actualización los paquetes nuevos
    apt-get upgrade -y

# <-------------------------------------------------->
# Instalación pila LAMP
# <-------------------------------------------------->

    # Instalamos el servidor web de apache
    apt-get install apache2 -y

    # Instalamos MSQL Server
    apt-get install mysql-server -y 

    # Instalamos los módulos de PHP
    apt-get install php libapache2-mod-php php-mysql -y
    
# <-------------------------------------------------->
# Instalación pila LAMP
# <-------------------------------------------------->

# <-------------------------------------------------------------->
# Configuracion de Apache para la instalacion de WordPress 
# <-------------------------------------------------------------->

    # Activacion del modulo rewrite
        a2enmod rewrite

    # Copiamos el archivo modificado de 000-default.conf
        cp ../conf/000-default.conf /etc/apache2/sites-available

    # Copiamos el archivo por defecto de dir.conf
        cp ../conf/dir.conf /etc/apache2/mod-available

    # Reiniciamos el servidor web Apache2.4
        systemctl restart apache2.service

# <-------------------------------------------------------------->
# Configuracion de Apache para la instalacion de WordPress 
# <-------------------------------------------------------------->
