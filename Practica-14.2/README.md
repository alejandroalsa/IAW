![LOGO](https://user-images.githubusercontent.com/67869168/221359506-18643ddb-b786-4f64-8ada-f6e0b25f744d.svg)


# PRACTICAS IAW - 2023 - IAW 2º Trimestre - PRACTICA 14.1

En esta práctica realizaremos la implantación de un sitio PrestaShop en Amazon Web Services (AWS) haciendo uso de contenedores Docker y la herramienta Docker Compose.

Las tereas a realizar son:

* Creacion de una máquina virtual Amazon EC2. Para evitar posibles problemas con el instalador de PrestaShop le otrogaremos la la MV al menos 2 GB de memoria RAM. 
* Instalacion y configuracion de Docker y Docker compose en la máquina virtual.
* Creacion de un archivo docker-compose.yml para poder desplegar los servicios de PrestaShop, MySQL y phpMyAdmin. Utilizando las imágenes oficiales de Docker Hub. La imagen de PrestaShop que utilizaremos es la de Bitnami (bitnami/prestashop).
* Mostrar la IP pública de la instancia en AWS y comprobar que se puede acceder a los servicios de PrestaShop y phpMyAdmin desde una navegador web.
* Añadir el servicio https-portal para poder acceder al servicio de PrestaShop a través de un nombre de dominio por HTTPS.

La estructuracion del Directorio es la seiguiente:

```txt
├── Ej-PS
│   ├── EC2
│   │   ├── main.tf
│   │   └── variables.tf
│   └── Install PS
│       ├── Docker
│       │   └── docker-compose.yml
│       ├── inventory
│       ├── main.yml
│       ├── playbooks
│       │   ├── deploy_ps.yml
│       │   └── install_docker.yml
│       └── variables
│           └── variables.yml
├── Ej-PS-BITNAMI
│   ├── EC2
│   │   ├── main.tf
│   │   └── variables.tf
│   └── Install PS
│       ├── Docker
│       │   └── docker-compose.yml
│       ├── inventori
│       ├── main.yml
│       ├── playbooks
│       │   ├── deploy_ps.yml
│       │   └── install_docker.yml
│       └── variables
│           └── variables.yml
└── README.md
```

En la carpeta de Ej-PS se realiza el despliegue de las maquinas virtuales en EC2 siguiendo la estructura indicada y el despliegue de PS en base a las imagenes oficiales

En la carpera de Ej-PS-BITNAMI las tereas son las mismas, la uno diferencia es que en esta utilizaremos las imagenes de BITNAMI como indica la estructura.

## Ramas

- [IAW 1º Trimestre](https://github.com/alejandroalsa/IAW/tree/IAW-1%C2%BA-Trimestre)

- [IAW 2º Trimestre](https://github.com/alejandroalsa/IAW/tree/IAW-2%C2%BA-Trimestre)


## Descarga

```bash
  git clone https://github.com/alejandroalsa/IAW.git
```
    
## Desarrollador

- [@alejandroalsa](https://www.github.com/alejandroalsa)
