#!/bin/bash
#                                                              ('-.   
#                                                            _(  OO)  
#   ,----.      ,--. ,--.     ,-.-')   ,--.       ,--.      (,------. 
#  '  .-./-')   |  | |  |     |  |OO)  |  |.-')   |  |.-')   |  .---' 
#  |  |_( O- )  |  | | .-')   |  |  \  |  | OO )  |  | OO )  |  |     
#  |  | .--, \  |  |_|( OO )  |  |(_/  |  |`-' |  |  |`-' | (|  '--.  
# (|  | '. (_/  |  | | `-' / ,|  |_.' (|  '---.' (|  '---.'  |  .--'  
#  |  '--'  |  ('  '-'(_.-' (_|  |     |      |   |      |   |  `---. 
#   `------'     `-----'      `--'     `------'   `------'   `------' 
#
#
#
#-----------------------------------------------------------------------------#                                                                             
# __________ .__ .__              .____        _____      _____  __________   #
# \______   \|__||  |  _____      |    |      /  _  \    /     \ \______   \  #
#  |     ___/|  ||  |  \__  \     |    |     /  /_\  \  /  \ /  \ |     ___/  #
#  |    |    |  ||  |__ / __ \_   |    |___ /    |    \/    Y    \|    |      #
#  |____|    |__||____/(____  /   |_______ \\____|__  /\____|__  /|____|      #
#                           \/            \/        \/         \/             #
#                                                                             #
#-----------------------------------------------------------------------------#

LAMP_USER=lamp_user
LAMP_PASSWORD=lamp_password
LAMP_DB=lamp_db


# Depuramos comandos que el script realiza para poder verlos
clear
set -x

# Accedemos al directorio tmp y eliminamos el directorio previo de instalación
cd /tmp
rm -rf iaw-practica-lamp

# Clonamos el repo de Jose Juan 
git clone https://github.com/josejuansanchez/iaw-practica-lamp.git

# Importamos la base de datos
rm -fr phpMyAdmin
mysql -u root < iaw-practica-lamp/db/database.sql

mysql -u root <<< "CREATE USER IF NOT EXISTS '$LAMP_USER'@'%'"
mysql -u root <<< "SET PASSWORD FOR '$LAMP_USER'@'%' = '$LAMP_PASSWORD'"
mysql -u root <<< "GRANT ALL PRIVILEGES ON $LAMP_DB.* TO '$LAMP_USER'@'%';"

sed -i "s/'lamp_db'/$LAMP_DB/" /var/www/html/config.php  
sed -i "s/'lamp_user'/$LAMP_USER/" /var/www/html/config.php  
sed -i "s/'lamp_password'/$LAMP_PASSWORD/" /var/www/html/config.php  

# Movemos el código de la aplicación a /var/www/html
mv /tmp/iaw-practica-lamp/src/* /var/www/html

# Cambiamos propietario y grupo de dicho directorio
chown www-data:www-data /var/www/html -R 

rm -f /var/www/html/index.html
#cp -f /home/ubuntu/iaw-practica-03/phpinfo.php /var/www/html/phpinfo.php

systemctl restart apache2