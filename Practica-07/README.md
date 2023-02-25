# IAW Practica 07

> Alejandro Alfaro Sánchez 26 Nov 2022

## Índice

* **Funcion del Script** [🔗](#función-del-script)  
* **Descarga** [🔗](#descarga)

## Función del Script

Arquitectura de una aplicación web LAMP en dos niveles, el objetivo es configurar un servidor web apache2.4 y en otra máquina un servidor MySQL. El servidor Apache2.4 tendrá que conectarse al servidor MySQL que estará alojado en otra máquina, para ello realizaremos dos modificaciones, la primera será habilitar al servidor MySQL para que reciba peticiones desde fuera:

```
sed -i 's/127.0.0.1/0.0.0.0/' /etc/mysql/mysql.conf.d/mysqld.cnf
```

Acto seguido modificaremos el archivo de conexión de la APP web para que se conecte al servidor MySQL, en mi caso le proporcionaré la dirección IP Privada de MySQL:

```
sed -i "s/localhost/10.10.10.12/" /var/www/html/config.php
```

Recordar que tendremos que habilitar el puerto `3306` en el servidor MySQL para que pueda recibir las peticiones.

## Descarga

```
git clone https://github.com/alejandroalsa/IAW.git
```
