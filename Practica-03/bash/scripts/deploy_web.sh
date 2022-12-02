#!/bin/bash

clear
set -x


LAMP_DB=alejandro
LAMP_USER=alejandro
LAMP_PASS=alejandro

# Nos movemos a la carpeta de tmp.
    cd /tmp

# Eliminamos cualquier carpeta que este en el directorio /tmp con el nombre iaw-practica-lamp.
    rm -rf iaw-practica-lamp

# Clonamos el repositorio
    git clone https://github.com/josejuansanchez/iaw-practica-lamp.git

    rm -fr phpMyAdmin

    sed -i "s/'lamp_db'/$LAMP_DB/" /tmp/iaw-practica-lamp/db/database.sql


# Ejecutamos el Script de sql para la creacion de la base de datos. 
    mysql -u root < /tmp/iaw-practica-lamp/db/database.sql

    mysql -u root <<< "CREATE USER IF NOT EXISTS '$LAMP_USER'@'%'"
    mysql -u root <<< "SET PASSWORD FOR 'lamp_user'@'%' = '$LAMP_PASS'"
    mysql -u root <<< "GRANT ALL PRIVILEGES ON lamp_db.* TO '$LAMP_USER'@'%'"

    sed -i "s/'lamp_db'/$LAMP_DB/" /var/www/html/config.php
    sed -i "s/'lamp_user'/$LAMP_USER/" /var/www/html/config.php
    sed -i "s/'lamp_password'/$LAMP_PASS/" /var/www/html/config.php


    mv /tmp/iaw-practica-lamp/src/* /var/www/html
    
# En el caso de que este establecida un acontraseña para root
    # mysql -u root -pPASSWORD < /tmp/iaw-practica-lamp/db/database.sql
