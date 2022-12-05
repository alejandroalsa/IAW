#!/bin/bash

clear
set -x
source variables.sh

# Movimiento a la carpeta de tmp.
    cd /tmp

# Eliminacion de cualquier carpeta que este en el directorio /tmp con el nombre iaw-practica-lamp.
    rm -rf iaw-practica-lamp

# Clonacion del repositorio
    git clone https://github.com/josejuansanchez/iaw-practica-lamp.git

    rm -fr phpMyAdmin


# Ejecutamos el Script de sql para la creacion de la base de datos. 
    mysql -u root < /tmp/iaw-practica-lamp/db/database.sql

    mysql -u root <<< "CREATE USER IF NOT EXISTS '$LAMP_USER'@'%'"
    mysql -u root <<< "SET PASSWORD FOR '$LAMP_USER'@'%' = '$LAMP_PASSWORD'"
    mysql -u root <<< "GRANT ALL PRIVILEGES ON $LAMP_DB.* TO '$LAMP_USER'@'%';"


    sed -i "s/'lamp_db'/$LAMP_DB/" /var/www/html/config.php  
    sed -i "s/'lamp_user'/$LAMP_USER/" /var/www/html/config.php  
    sed -i "s/'lamp_password'/$LAMP_PASS/" /var/www/html/config.php  


    mv /tmp/iaw-practica-lamp/src/* /var/www/html

    chown www-data:www-data /var/www/html -R 

    rm -f /var/www/html/index.html

    systemctl restart apache2
    
# En el caso de que este establecida un acontraseña para root
    # mysql -u root -pPASSWORD < /tmp/iaw-practica-lamp/db/database.sql
