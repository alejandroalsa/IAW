#!/bin/bash

clear
set -x

# Actualización de repositorios
    apt-get update

# Actualización los paquetes nuevos
    apt-get upgrade -y

# <-------------------------------------------------->
# Instalación pila LAMP
# <-------------------------------------------------->

    # Instalamos el servidor web de apache
    apt-get install apache2 -y

    # Instalamos los módulos de PHP
    apt-get install php libapache2-mod-php php-mysql -y
    
# <-------------------------------------------------->
# Instalación pila LAMP
# <-------------------------------------------------->

# Copia del archivo phpinfo.php de PHP
    cp ../php/phpinfo.php /var/www/html
