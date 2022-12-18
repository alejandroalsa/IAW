#!/bin/bash
set - x
clear

# Actualización de repositorios
    apt-get update

# Actualización los paquetes nuevos
    apt-get upgrade -y

# Instalación nfs server
    apt install nfs-kernel-server -y

# Creamos el directorio que queramos compartir
    mkdir -p /var/www/html

# Configuramos el propietario y el grupo del direcorio que quiero compartir
    chown nobody:nogroup /var/www/html

# Pasamos el archivo de conf a /etc/exports
    cp ../conf/exports /etc/exports



# Reiniciamos el servidor nfs
    systemctl restart nfs-kernel-server
