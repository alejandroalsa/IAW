# Selccionamos la imagen base
FROM nginx

# Definimos el directorio de trabajo
WORKDIR /usr/share/nginx/html/

# Instalamos GIT
RUN apt update \
    && apt install git -y

# Descargamos el codigo del juego 2048
RUN git clone https://github.com/josejuansanchez/2048.git  \
    && mv 2048/* .

# Indicamos el puerto de NGIX
EXPOSE 80

# Indicamos el comando que se ejecuta al crear el contenedor 
ENTRYPOINT [ "nginx", "-g", "daemon off;" ]
