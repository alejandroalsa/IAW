![LOGO](https://user-images.githubusercontent.com/67869168/221359506-18643ddb-b786-4f64-8ada-f6e0b25f744d.svg)


# PRACTICAS IAW - 2023 - IAW 2º Trimestre - PRACTICA 14.1

En esta práctica se realizar la implantación de un sitio WordPress en Amazon Web Services (AWS) haciendo uso de contenedores Docker y la herramienta Docker Compose.

Las tereas a realizar son:

* Creacion de una máquina virtual Amazon EC2. 
* Instalacion y configuracion de Docker y Docker compose en la máquina virtual.
* Creacion de un archivo docker-compose.yml para poder desplegar los servicios de WordPress, MySQL y phpMyAdmin. Este utilizara las imágenes oficiales de Docker Hub.
* Mostrar la IP pública de la instancia en AWS y comprobar que se puede acceder a los servicios de WordPress y phpMyAdmin desde una navegador web.

La estructuracion del Directorio es la seiguiente:

```txt
├── EC2
│   ├──  scripts 
│   │   └── install_docker.sh
│   ├── main.tf
│   └── variables.tf
├── Install WP
│   ├── Docker
│   │   └── docker-compose.yml
│   ├── inventory
│   ├── main.yml
│   ├── playbooks
│   │   ├── deploy_wp.yml
│   │   └── install_docker.yml
│   └── variables
│       └── variables.yml
└── README.md
```

En la carpeta de EC2 se realiza el despliegue de las maquinas virtuales en EC2 siguiente la estructura indicada

En la carpera de Install WP se realiza el despliegue de WP segun la estructura indicada

## Ramas

- [IAW 1º Trimestre](https://github.com/alejandroalsa/IAW/tree/IAW-1%C2%BA-Trimestre)

- [IAW 2º Trimestre](https://github.com/alejandroalsa/IAW/tree/IAW-2%C2%BA-Trimestre)


## Descarga

```bash
  git clone https://github.com/alejandroalsa/IAW.git
```
    
## Desarrollador

- [@alejandroalsa](https://www.github.com/alejandroalsa)
