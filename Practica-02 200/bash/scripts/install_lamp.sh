#!/bin/bash

clear
set -x 

# Actualización de repositorios
    dnf update -y

# Instalación de paquetes
    dnf upgrade -y

# Instalación de git
    dnf install git -y

# <-------------------------------------------------->
# Instalación pila LAMP
# <-------------------------------------------------->

    # Instalamos el servidor web de apache
    dnf install httpd -y
    
    # Arancamos el servicio Apache y lo activamos para que inicie en el arranque
    systemctl start httpd
    systemctl enable httpd

    # Instalamos MSQL Server
    dnf install mysql-server -y

    # Arancamos el servicio MySQL y lo activamos para que inicie en el arranque
    systemctl start mysqld
    systemctl enable mysqld

    # Instalamos los módulos de PHP
    dnf install php php-mysqlnd php-zip php-json php-fpm -y

    # Activamos servicio PHP FPM
    systemctl enable --now php-fpm 

# <-------------------------------------------------->
# Instalación pila LAMP
# <-------------------------------------------------->
