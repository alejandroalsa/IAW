# IAW Practica 08

> Alejandro Alfaro Sánchez 1 Dic 2022

## Índice

* **Funcion del Script** [🔗](#función-del-script)  
* **Descarga** [🔗](#descarga)

## Función del Script

Balanceador de carga con Apache. Configuración en cuatro máquinas, un servidor web Apache2.4 como un proxy inverso para hacer de balanceador de carga.
Se crearán 3 servidores con el servidor web Apache2.4 instalado, en uno de ellos se configurara para que funcione como balanceador de carga, así repartirá las conexiones entre los otros dos servidores.

Módulos necesarios para la configuración del balanceador de carga:

```
a2enmod proxy
a2enmod proxy_http
a2enmod proxy_ajp
a2enmod rewrite
a2enmod deflate
a2enmod headers
a2enmod proxy_connect
a2enmod proxy_html
a2enmod lbmethod_byrequests
```

* **proxy** Permite configurar el servidor web como un proxy inverso.

* **proxy_http** Permite configurar el servidor web como un proxy inverso para el protocolo HTTP.

* **proxy_ajp** Permite configurar el servidor web como un proxy inverso para el protocolo AJP (Apache JServ Protocol).

* **rewrite** Permite al servidor reescribir las peticiones HTTP que recibe.

* **deflate** Permite comprimir el contenido que se envía al cliente.

* **headers** Permite al servidor web manipular las cabeceras de las peticiones/respuestas HTTP que envía/recibe.

* **proxy_connect** Permite configurar el servidor web como un servidor proxy que puede establecer conexiones HTTPS con los servidores donde distribuye la carga, utilizando el método CONNECT de HTTP.

* **proxy_html** Permite configurar el servidor web como un servidor proxy que puede filtrar y modificar el contenido HTML de las páginas web que se reciben de los servidores donde se distribuye la carga.

* **lbmethod_byrequests** Este módulo añade un nuevo método de balanceo de carga que permite distribuir las peticiones entre los servidores en función de los parámetros `lbfactor` y `lbstatus` que se le pasan a la directiva `ProxySet`.

Editamos el archivo `000-default.conf` que está en el directorio `/etc/apache2/sites-available`:

```conf
<VirtualHost *:80>
    # Dejamos la configuración del VirtualHost como estaba
    # sólo hay que añadir las siguiente directivas: Proxy y ProxyPass

    <Proxy balancer://mycluster>
        # Server 1 (IP Privada)
        BalancerMember http://10.10.10.20

        # Server 2 (IP Privada)
        BalancerMember http://10.10.10.21
    </Proxy>

    ProxyPass / balancer://mycluster/
</VirtualHost>
```

## Descarga

```
git clone https://github.com/alejandroalsa/IAW.git
```
