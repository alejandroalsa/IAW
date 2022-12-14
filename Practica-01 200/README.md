# IAW Practica 01
> Alejandro Alfaro S谩nchez 24 Oct 2022

## 脥ndice

* **Instalaci贸n pila LAMP** [馃敆](#instalaci贸n-pila-lamp)
* **Instalaci贸n de herramientas para la Pila LAMP** [馃敆](#instalaci贸n-de-herramientas-para-la-pila-lamp)
* **Token** [馃敆](#token)
* **Descarga** [馃敆](#descarga)

## Instalaci贸n pila LAMP

*Instalaci贸n de Apache2*

```
sudo apt-get install apache2 -y
```

*Instalaci贸n de MSQL Server*

```
sudo apt-get install mysql-server -y 
```

*M贸dulos de PHP*

```
sudo apt-get install php libapache2-mod-php php-mysql -y 
```

## Instalaci贸n de herramientas para la Pila LAMP

*Instalaci贸n de phpMyAdmin*

```
sudo apt install phpmyadmin php-mbstring php-zip php-gd php-json php-curl -y
```

*Instalaci贸n de Adminer*

```
#Descargamos el archivo y lo movemos a una carpeta de /var/wwww

wget https://github.com/vrana/adminer/releases/download/v4.8.1/adminer-4.8.1-mysql.php

mv adminer-4.8.1-mysql.php  /var/www/html/adminer/index.php
```

*Instalaci贸n de GoAccess*

```
# A帽adimos el repositorio de GoAccess

echo "deb http://deb.goaccess.io/ $(lsb_release -cs) main" > /etc/apt/sources.list.d/goaccess.list

# A帽adimos la clave p煤blica de GoAccess

wget -O - https://deb.goaccess.io/gnugpg.key | sudo apt-key add -y

# Instalamos GoAccess

sudo apt-get install goaccess -y
```
### Definici贸n de variables y respuestas autom谩ticas.

Se han definido dos 6 variables, 2 usuarios, 2 contrase帽as y una contrase帽a.

```
PHPMYADMIN_PASSWORD=password
STATS_USER_1=alejandro
STATS_PASSWORD_USER_1=alejandro
STATS_USER_2=alejandroalsa
STATS_PASSWORD_USER_2=alejandroalsa
```

Se han definido 4 respuestas autom谩ticas para la instalaci贸n de phpMyAdmin

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
git clone https://github.com/alejandroalsa/IAW.git
```
