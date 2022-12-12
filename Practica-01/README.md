# IAW Practica 01
> Alejandro Alfaro Sánchez 24 Oct 2022

## Índice

* **Instalación pila LAMP** [🔗](#instalación-pila-lamp)
* **Instalación de herramientas para la Pila LAMP** [🔗](#instalación-de-herramientas-para-la-pila-lamp)
* **Token** [🔗](#token)
* **Descarga** [🔗](#descarga)

## Instalación pila LAMP

*Instalación de Apache2*

```
sudo apt-get install apache2 -y
```

*Instalación de MSQL Server*

```
sudo apt-get install mysql-server -y 
```

*Módulos de PHP*

```
sudo apt-get install php libapache2-mod-php php-mysql -y 
```

## Instalación de herramientas para la Pila LAMP

*Instalación de phpMyAdmin*

```
sudo apt install phpmyadmin php-mbstring php-zip php-gd php-json php-curl -y
```

*Instalación de Adminer*

```
#Descargamos el archivo y lo movemos a una carpeta de /var/wwww

wget https://github.com/vrana/adminer/releases/download/v4.8.1/adminer-4.8.1-mysql.php

mv adminer-4.8.1-mysql.php  /var/www/html/adminer/index.php
```

*Instalación de GoAccess*

```
# Añadimos el repositorio de GoAccess

echo "deb http://deb.goaccess.io/ $(lsb_release -cs) main" > /etc/apt/sources.list.d/goaccess.list

# Añadimos la clave pública de GoAccess

wget -O - https://deb.goaccess.io/gnugpg.key | sudo apt-key add -y

# Instalamos GoAccess

sudo apt-get install goaccess -y
```
### Definición de variables y respuestas automáticas.

Se han definido dos 6 variables, 2 usuarios, 2 contraseñas y una contraseña.

```
PHPMYADMIN_PASSWORD=password
STATS_USER_1=alejandro
STATS_PASSWORD_USER_1=alejandro
STATS_USER_2=alejandroalsa
STATS_PASSWORD_USER_2=alejandroalsa
```

Se han definido 4 respuestas automáticas para la instalación de phpMyAdmin

```
echo "phpmyadmin phpmyadmin/reconfigure-webserver multiselect apache2" | debconf-set-selections
echo "phpmyadmin phpmyadmin/dbconfig-install boolean true" | debconf-set-selections
echo "phpmyadmin phpmyadmin/mysql/app-pass $PHPMYADMIN_PASSWORD" | debconf-set-selections
echo "phpmyadmin phpmyadmin/app-password-confirm password $PHPMYADMIN_PASSWORD" | debconf-set-selections
```

## Token

```
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
```

## Descarga

```
git clone https://github.com/LLALEX-ESP/iaw-practica-01.git
```

