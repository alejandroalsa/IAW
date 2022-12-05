#!/bin/bash

clear
set -x
source variables.sh

# Movimiento a la carpeta de tmp.
    cd /tmp

# Eliminación de cualquier carpeta que este en el directorio /tmp con el nombre iaw-practica-lamp.
    rm -rf iaw-practica-lamp

# Clonación del repositorio
    git clone https://github.com/josejuansanchez/iaw-practica-lamp.git

    rm -fr phpMyAdmin

# Ejecución del Script de sql para la creación de la base de datos. 
    mysql -u root < /tmp/iaw-practica-lamp/db/database.sql

# Creación de un usuario
    mysql -u root <<< "CREATE USER IF NOT EXISTS '$LAMP_USER'@'%'"

# Asignación de una contraseña al usuario
    mysql -u root <<< "SET PASSWORD FOR '$LAMP_USER'@'%' = '$LAMP_PASSWORD'"

# Asignación de privilegios al usuario
    mysql -u root <<< "GRANT ALL PRIVILEGES ON $LAMP_DB.* TO '$LAMP_USER'@'%';"

# Movimiento de todos los archivos a /var/www/html
    mv /tmp/iaw-practica-lamp/src/* /var/www/html

# Modificación del campo lamp_db para la sustitución del nuestro
    sed -i "s/'lamp_db'/$LAMP_DB/" /var/www/html/config.php

# Modificación del campo lamp_user para la sustitución del nuestro
    sed -i "s/'lamp_user'/$LAMP_USER/" /var/www/html/config.php

# Modificación del campo lamp_password para la sustitución del nuestro 
    sed -i "s/'lamp_password'/$LAMP_PASS/" /var/www/html/config.php  

# Asignación de usario y grupo a todos los archivos de /var/www/html
    chown www-data:www-data /var/www/html -R 

# Eliminación de archivo por defecto de Apache2.4
    rm -f /var/www/html/index.html

# Reinicio del servidor web Apache2.4
    systemctl restart apache2
    
# En el caso de que este establecida un acontraseña para root
    # mysql -u root -pPASSWORD < /tmp/iaw-practica-lamp/db/database.sql
