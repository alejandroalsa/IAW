# IAW Practica 05

> Alejandro Alfaro Sánchez 30 Oct 2022

## Índice

* **Objetivo** [🔗](#objetivo)
* **Declaración de Variables** [🔗](#declaración-de-variables)
* **Procesos del Script y Estructura** [🔗](#procesos-del-script-y-estructura)
* **Token** [🔗](#token)
* **Descarga** [🔗](#descarga)


## Objetivo

En este Script se tiene como objetivo la instalación y preconfiguración de un sistema de gestión de contenidos libre y de código abierto pensado para construir desde cero tiendas en línea de comercio electrónico. Enfocado para permitir crear tiendas en línea desde pequeñas empresas a grandes corporaciones.

*   **Servidor Web** `Apache2`
*   **Gestor de Base de Datos** `MySQL`
*   **Herramienta de Gestión de Base de Datos** `phpMyAdmin`
*   **Gestión de Certificados SSL** `Certbot`
*   **Análisis Web** `GoAccess`
*   **Gestor de Tienda Online** `PrestaShop`

## Declaración de Variables

Todas las Variables de configuración se declaran en el archivo `iaw-practica-05/variables/variables.sh`, declarando las siguientes variables:

```
DIRECTORIOPRESTASHOP= #Nombre del Directorio de Virtual Host donde se instalara PrestaShop (predefinido -> prestashop )

PHPMYADMIN_PASSWORD= #Contraseña para el usuario root de la base de datos (predefinido ->  )

DOMINIO= #Dominio del sitio web (predefinido -> "Vacio")

PS_IDIOMA= #Idioma de PrestaShop (predefinido -> es)

PS_NOMBRE= #Nombre de la Tienda (predefinido -> Alejandroalsa_Shop)

PS_PAIS= #País donde se alojara de la Tienda (predefinido -> es)

PS_ZONA_HORARIA= #Zona horaria de donde se alojara de la Tienda (predefinido -> Europe/Madrid)

PS_NOMBRE_ADMINISTRADOR= #Nombre real del administrador para la tienda (predefinido -> "Vacio")

PS_APELLIDO_ADMINISTRADOR= #Apellido real del administrador para la tienda (predefinido -> "Vacio")

PS_EMAIL= #Email real del administrador para la tienda (predefinido ->  "Vacio")

PS_IP_BASEDATOS= #Dirección IP de la Base de Datos, no modificar (predefinido ->  127.0.0.1)

PS_USUARIO_BASEDATOS= #Nombre de usuario específico para la Base de Datos de la tienda (predefinido ->  usuarioprestashop)

PS_CONTTASENA_BASEDATOS= #Contraseña para el usuario de la Base de Datos de la tienda (predefinido -> zH5^r77HeMx2%9ZL@a#J)

PS_BASEDATOS= #Nombre de la Base de Datos de la tienda (predefinido -> prestashop)

PS_DOMINIO= #Dominio del sitio web (predefinido -> "Vacio")

PS_SSL= #Activación de SLL 1=Si 0=No (predefinido -> 1)

PS_PASSWORD= #Contraseña para la cuenta de administrador de la Tienda (predefinido ->  zH5^r77HeMx2%9ZL@a#J)
```

## Procesosos del Script y Estructura

El Script está dividido de la siguiente manera:

```
iaw-practica-05
|
|--conf
|  |
|  |--prestashop.conf   <------------------------ Archivo del Virtual Host para PrestaShop
|
|--php
|  |
|  |--phppsinfo.php <---------------------------- Archivo php para comprobar los requisitos del sistema para PrestaShop
|
|--scripts
|  |
|  |--install.sh <------------------------------- Archivo de instalación de la Herramienta
|  |
|  |--lamp_install.sh <-------------------------- Archivo de instalación de la pila LAMP
|  |
|  |--lamp_tools_install.sh <-------------------- Archivo de instalación de herramientas para la pila LAMP
|  |
|  |--prestashop_install.sh <-------------------- Archivo de instalación de PrestaShop
|  |
|  |--ssl_install_sh <--------------------------- Archivo de configuración de certificado SSL 
|
|--variables
|  |
|  |--variables.sh <----------------------------- Archivo de declaración de Variables
|
|--README.md
```

Desde `iaw-practica-05/scripts/install.sh` se ejecutarán todos los procesos de instalación y configuración de la web en el siguiente orden:

*   1 Instalacion de la pila LAMP
*   2 Instalacion de la herramienrtas para la pila LAMP
*   3 Configuracion del certificado SSL para la web
*   4 Instalacion de PrestaShop

## Token

```
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
```

## Descarga

```
git clone https://github.com/LLALEX-ESP/iaw-practica-05.git
```

# IAW Practica 06

> Alejandro Alfaro Sánchez 24 Nov 2022

## Índice

* **Objetivo** [🔗](#objetivo)
* **Declaración de Variables** [🔗](#declaración-de-variables)
* **Procesos de Ansible y Estructura** [🔗](#procesos-de-ansible-y-estructura)
* **Descarga** [🔗](#descarga)

## Objetivo

En este proyecyo se tiene como objetivo la instalación y preconfiguración de un sistema de gestión de contenidos libre y de código abierto pensado para construir desde cero tiendas en línea de comercio electrónico. Enfocado para permitir crear tiendas en línea desde pequeñas empresas a grandes corporaciones.

*   **Servidor Web** `Apache2`
*   **Gestor de Base de Datos** `MySQL`
*   **Gestión de Certificados SSL** `Certbot`
*   **Gestor de Tienda Online** `PrestaShop`

## Declaración de Variables

Todas las Variables de configuración se declaran en los archivos `ssl.yml` y `prestashop_install.yml`, declarando las siguientes variables:

```
prestashop_version: Version a descargar de PrestaShop "8.0.0"
prestashop_url_descarga: URL de descarga de PrestaShop "https://github.com/PrestaShop/PrestaShop/releases/download/8.0.0/prestashop_{{ prestashop_version }}.zip"
prestashop_directorio: Directorio donde se instalara PrestaShop "/var/www/html/"
prestashop_db_create: Valores por defecto "1"
prestashop_db_clear:  Valores por defecto "1"
prestashop_dominio: Dominio de que se asignara a PrestaShop "###"
prestashop_db_ip_server: Direccion IP de la Base de Datos "127.0.0.1"
prestashop_db_engine: "InnoDB"
prestashop_db_nombre: Nombre de la Base de Datos "Prestashop"
prestashop_db_usuario: Usuario para la Base de Datos Prestashop "usuario_prestashop"
prestashop_db_pass: Contraseña del usuario para la Base de Datos Prestashop ""
prestashop_db_prefijo: Prefijos para las tablas de la Base de Datos "ps_"
prestashop_idiaoma: Idioma de Prestashop "es" 
prestashop_pais: Pais donde se instalara Prestashop "es"
prestashop_zona_horaria: Zona horaria que usara Prestashop "Europe/Madrid"
prestashop_ssl: Activacion de SSL para Prestashop "1"
prestashop_nombre_tienda: Nombre de la Tienda Prestashop "Mi tienda"
prestashop_nombre: Nombre del Administrador de la Tienda "###"
prestashop_apellido: Apellidos del Administrador de la Tienda "###"
prestashop_pass: Contraseña del la cuenta del Administrador de la Tienda "wI7A42$iJCBK*%R@"
prestashop_email: Direccion de E-mail del Administrador de la Tienda "###"
prestashop_admin_nombre: Nombre para la cuenta del Administrador de la Tienda "###"
```

## Procesosos de Ansible y Estructura

El instalador desde Ansible está dividido de la siguiente manera:

```
PrestaShop-Ansible
|
|--inventario
|  |
|--lamp_install.yml
|  |
|--main.yml
|  |
|--prestashop_install.yml
|  |
|--README.md
|  |
|--ssl.yml
```

Desde `main.yml` se ejecutarán todos los procesos de instalación y configuración de la web en el siguiente orden:

*   1 -> Instalacion de la pila LAMP `lamp_install.yml`
*   2 -> Instalacion de PrestaShop `prestashop_install.yml`
*   3 -> Instalacion del certificado SSL `ssl.yml`

```bash
ansible-playbook -i inventario main.yml
```

## Descarga

```
git clone https://github.com/LLALEX-ESP/PrestaShop-Ansible.git
```
