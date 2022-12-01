#!/bin/bash

clear
set -x

# Actualizamos los repositorios
    apt-get update

# Actualizamos los paquetes nuevos
    apt-get upgrade -y

# <-------------------------------------------------->
# Instalamos lo programas para la pila LAMP
# <-------------------------------------------------->

    # Instalamos el servidor web de apache
    apt-get install apache2 -y

    # Instalamos MSQL Server
    apt-get install mysql-server -y 

    # Instalamos los módulos de PHP
    apt-get install php libapache2-mod-php php-mysql -y
    
# <-------------------------------------------------->
# Instalamos lo programas para la pila LAMP
# <-------------------------------------------------->

# Copiamos el archivo phpinfo de PHP
    cp ../php/info.php /var/www/html
