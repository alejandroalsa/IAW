#!/bin/bash

clear
set -x

# Nos movemos a la carpeta de tmp.
    cd /tmp

# Eliminamos cualquier carpeta que este en el directorio /tmp con el nombre iaw-practica-lamp.
    rm -rf iaw-practica-lamp

# Clonamos el repositorio
    git clone https://github.com/josejuansanchez/iaw-practica-lamp.git

    rm -fr phpMyAdmin

# Ejecutamos el Script de sql para la creacion de la base de datos. 
    mysql -u root < /tmp/iaw-practica-lamp/db/database.sql

    mv /tmp/iaw-practica-lamp/src/* /var/www/html
    
# En el caso de que este establecida un acontraseña para root
    # mysql -u root -pPASSWORD < /tmp/iaw-practica-lamp/db/database.sql
