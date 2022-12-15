#!/bin/bash
set -x
clear
source ../variables.sh

wget https://wordpress.org/latest.zip -O /tmp/latest.zip

apt-get install unzip -y

# Eliminamos instalaciones previas de WordPress y el archivo index de Apache
rm -rf /var/www/html/wordpress
rm -rf /var/www/html/index.html

unzip /tmp/latest.zip -d /var/www/html


# Copiamos el archivo de configuración de ejemplo y creamos uno nuevo
cp /var/www/html/wordpress/wp-config-sample.php /var/www/html/wordpress/wp-config.php


# Configuramos las variables en el archivo de configuración
sed -i "s/database_name_here/$DB_NAME/" /var/www/html/wordpress/wp-config.php

sed -i "s/username_here/$DB_USER/" /var/www/html/wordpress/wp-config.php

sed -i "s/password_here/$DB_PASS/" /var/www/html/wordpress/wp-config.php

sed -i "s/localhost/$DB_HOST/" /var/www/html/wordpress/wp-config.php


# Añadimos las varibles WP_HOME y WP_SITEURL

sed -i "/DB_COLLATE/a define('WP_HOME', '$WP_HOME');" /var/www/html/wordpress/wp-config.php

sed -i "/WP_HOME/a define('WP_SITEURL', '$WP_SITEURL');" /var/www/html/wordpress/wp-config.php

cp /var/www/html/wordpress/index.php /var/www/html/index.php

sed -i "s#wp-blog-header.php#wordpress/wp-blog-header.php#" /var/www/html/index.php

sed -i "/WP_HOME/a $_SERVER['HTTPS'] = 'on';" /var/www/html/wordpress/wp-config.php

chown www-data:www-data /var/www/html -R
