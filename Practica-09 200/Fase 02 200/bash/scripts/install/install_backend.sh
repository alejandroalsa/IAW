#!/bin/bash
set -x
clear

# Actualización de repositorios
    apt-get update

# Actualización los paquetes nuevos
    apt-get upgrade -y

# <-------------------------------------------------->
# Instalación bakend pila LAMP
# <-------------------------------------------------->

    # Instalacion MSQL Server
    apt-get install mysql-server -y

    # Cambio de las variables mysql para que accepten conexiones desde cualquier interfaz
    sed -i 's/127.0.0.1/0.0.0.0/' /etc/mysql/mysql.conf.d/mysqld.cnf

    # Reinicio del servicio de mysql
    systemctl restart mysql
    
# <-------------------------------------------------->
# Instalación pila LAMP
# <-------------------------------------------------->
