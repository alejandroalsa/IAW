#!/bin/bash
clear
set -x
source variables.sh


# Eliminacion de la base de datos si existe
    mysql -u root <<< "DROP DATABASE IF EXISTS $DB_NAME"

# Creación de la vase de datos
    mysql -u root <<< "CREATE DATABASE $DB_NAME CHARACTER SET utf8mb4"

# Eliminacion del usuario si existe
    mysql -u root <<< "DROP USER IF EXISTS $DB_USER"

# Creación del usuario
    mysql -u root <<< "CREATE USER IF NOT EXISTS '$DB_USER'@'%' IDENTIFIED BY '$DB_PASS'"

# Asignacion de privilegios sobre la base de datos
    mysql -u root <<< "GRANT ALL PRIVILEGES ON $DB_NAME.* TO '$DB_USER'@'%'"

# Eliminacion del directorio iaw-practica-lamp por si ya existiera
    rm -rf /tmp/iaw-practica-lamp

# Clonación del repositorio
    git clone https://github.com/josejuansanchez/iaw-practica-lamp.git /tmp/iaw-practica-lamp

# Modificacion del nombre de la base de datos
    sed -i "s/lamp_db/$DB_NAME/" /tmp/iaw-practica-lamp/db/database.sql

# Importacion de la base de datos para crearla
    mysql -u root < /tmp/iaw-practica-lamp/db/database.sql
