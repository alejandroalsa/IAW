#!/bin/bash

clear
set -x
source variables.sh

# Eliminación de cualquier carpeta que este en el directorio /tmp con el nombre iaw-practica-lamp.
    rm -rf /tmp/iaw-practica-lamp

# Clonación del repositorio
    git clone https://github.com/josejuansanchez/iaw-practica-lamp.git /tmp/iaw-practica-lamp

# Eliminación de instalaciones anteriores
    rm -fr phpMyAdmin

# Modificación del campo lamp_db por la sustitución del nuestro
    sed -i "s/lamp_db/$LAMP_DB/" /tmp/iaw-practica-lamp/db/database.sql

# Ejecución del Script de sql para la creación de la base de datos. 
    mysql -u root < /tmp/iaw-practica-lamp/db/database.sql

# Eliminacion del usuario si existe
    mysql -u root <<< "DROP USER IF EXISTS $LAMP_USER"

# Creación del usuario
    mysql -u root <<< "CREATE USER IF NOT EXISTS '$LAMP_USER'@'%' IDENTIFIED BY '$LAMP_PASS'"

# Asignacion de privilegios sobre la base de datos
    mysql -u root <<< "GRANT ALL PRIVILEGES ON $LAMP_DB.* TO '$LAMP_USER'@'%'"

# Movimiento de todos los archivos a /var/www/html
    mv /tmp/iaw-practica-lamp/src/* /var/www/html

# Modificación del campo lamp_db por la sustitución del nuestro
    sed -i "s/lamp_db/$LAMP_DB/" /var/www/html/config.php  

# Modificación del campo lamp_user por la sustitución del nuestro
    sed -i "s/lamp_user/$LAMP_USER/" /var/www/html/config.php  

# Modificación del campo lamp_password por la sustitución del nuestro 
    sed -i "s/lamp_password/$LAMP_PASS/" /var/www/html/config.php

# Asignación de usario y grupo a todos los archivos de /var/www/html
    chown www-data:www-data /var/www/html -R

# Eliminación de archivo por defecto de Apache2.4
    rm -f /var/www/html/index.html

# Reinicio del servidor web Apache2.4
    systemctl restart apache2

# En el caso de que este establecida un acontraseña para root
    # mysql -u root -pPASSWORD < /tmp/iaw-practica-lamp/db/database.sql
