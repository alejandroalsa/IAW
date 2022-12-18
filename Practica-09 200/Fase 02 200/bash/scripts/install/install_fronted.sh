#!/bin/bash
set -x
clear

# Actualización de repositorios
    apt-get update

# Actualización los paquetes nuevos
    apt-get upgrade -y

# <-------------------------------------------------->
# Instalación pila LAMP
# <-------------------------------------------------->

    # Instalamos el servidor web de apache
    apt-get install apache2 -y

    # Instalamos los módulos de PHP
    apt-get install php libapache2-mod-php php-mysql -y
    
# <-------------------------------------------------->
# Instalación pila LAMP
# <-------------------------------------------------->

# Copia del archivo 000-default.conf
    cp ../../conf/000-default.conf /etc/apache2/sites-available

# Copia del archivo dir.conf
    cp ../../conf/dir.conf /etc/apache2/mods-available

# Reinicio del servidor web Apache2.4
    systemctl restart apache2
