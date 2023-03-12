![LOGO](https://user-images.githubusercontent.com/67869168/221359506-18643ddb-b786-4f64-8ada-f6e0b25f744d.svg)


# PRACTICAS IAW - 2023 - IAW 2º Trimestre - PRACTICA 14.4

En esta práctica crearemos un archivo Dockerfile para crear una imagen Docker que contenga una aplicación web estática. Posteriormente la publicaremos en Docker Hub y realizaremos la implantación del sitio web en Amazon Web Services (AWS) haciendo uso de contenedores Docker y de la herramienta Docker Compose.

La estructuracion del Dockerfile es la seiguiente:

```dockerfile
FROM nginx
WORKDIR /usr/share/nginx/html/
RUN apt update \
    && apt install git -y
RUN git clone https://github.com/josejuansanchez/2048.git  \
    && mv 2048/* .
EXPOSE 80
ENTRYPOINT [ "nginx", "-g", "daemon off;" ]
```

* `FROM nginx` Selccionamos la imagen base
* `WORKDIR /usr/share/nginx/html/` Definimos el directorio de trabajo
* `RUN apt update \ && apt install git -y` Instalamos GIT
* `RUN git clone https://github.com/josejuansanchez/2048.git  \ && mv 2048/* .` Descargamos el codigo del juego 2048
* `EXPOSE 80` Indicamos el puerto de NGIX
* `ENTRYPOINT [ "nginx", "-g", "daemon off;" ]` Indicamos el comando que se ejecuta al crear el contenedor 

Enlace al [DockerHub](https://hub.docker.com/r/diwes/2048)

Docker Pull Command: 

```bash
docker pull diwes/2048
```

## Ramas

- [IAW 1º Trimestre](https://github.com/alejandroalsa/IAW/tree/IAW-1%C2%BA-Trimestre)

- [IAW 2º Trimestre](https://github.com/alejandroalsa/IAW/tree/IAW-2%C2%BA-Trimestre)


## Descarga

```bash
  git clone https://github.com/alejandroalsa/IAW.git
```
    
## Desarrollador

- [@alejandroalsa](https://www.github.com/alejandroalsa)
