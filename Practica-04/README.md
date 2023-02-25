# IAW Practica 04
> Alejandro Alfaro Sánchez 30 Oct 2022

## Índice

* **Asignacion de Dominio a IP** [🔗](#asignacion-de-dominio-a-ip)
* **Descarga y Configuracion de Cerbot** [🔗](#descarga-y-configuracion-de-cerbot)
* **Token** [🔗](#token)
* **Descarga** [🔗](#descarga)

## Asignacion de Dominio a IP

El primer paso que tendremos que relizar es asiciar nuestra direccion IP a un dominio, como no tenemos fondos para comprar un dominio utilizaremos a [No-IP](https://my.noip.com) que es un proveedor de servicios de dominio y host.

El primer paso sera crearno una cuenta para poder registrar los nombre de dominio, si va a ser de un solo uso la cuenta recomiendo el uso de un correo temporal. [Temp-Mail](https://temp-mail.org/es/).

Una vez creada la cuenta no dirigiremos a `DNS Dinamico` en el menu de navegacion de la izquierda, una vez dentro clicaremos sobre `No-IP Hostname`, acto seguido crearemos el nombre para el host.

![Cap_01](https://user-images.githubusercontent.com/67869168/198869661-01cbd46c-2c6e-4107-8fa2-0d53f28a7869.png)

Se nos abrira un PopUp de configuracion.

![Cap_02](https://user-images.githubusercontent.com/67869168/198869692-2d634ab7-931d-4008-896a-70e49a538050.png)

En el tendremos que introducir el nombre para el dominio, su extension, la direccion IP a la que apuntara y el tipo de registro, cuando finalizamos la configuracion clicaremos sobre `Crear nombre de Host`.

## Descarga y Configuracion de Cerbot

El primer paso para descargar `Cerbot` sera actualizar `snapd` y depues instalar `Cerbot`

```
sudo snap install core; sudo snap refresh core

sudo snap install --classic certbot
```

Una vez hecha la instalacion configuraremos Cerbot para que nos asigne un certificado SSL. 

```
sudo certbot --apache
```

Durante la instalacion tendremos que introducir `Correo electronico`, `Aceptar los terminos`, `Compartir nuestro correo electronico` y finalmente el `Dominio`.

```
sudo certbot --apache -m demo@demo.es --agree-tos --no-eff-email -d practicahttps.ml
```

Una vez terminada la configuracion disponemos de un comando paera comprobar que el temporizador esta activado y que realizara la renovacion del mismo.

```
systemctl list-timers
```

## Token

```
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
```

## Descarga

```
git clone https://github.com/alejandroalsa/IAW.git
```

