![LOGO](https://user-images.githubusercontent.com/67869168/221359506-18643ddb-b786-4f64-8ada-f6e0b25f744d.svg)


# PRACTICAS IAW - 2023 - IAW 2º Trimestre - PRACTICA 13.2

En esta practica vamos a realizar la creacion de  la infraestructura necesaria para desplegar la aplicación web propuesta en la práctica 7 y 9.

Para ellos estamos utilizando las funcionalidades de AWS CloudFormation.

En ambos despliegues se sigue la siguiente estructura:

```txt
├── Ej-01
│   ├── EC2
│   │   ├── EC2-BackEnd
│   │   │   └── ec2-backend.yaml
│   │   └── EC2-FrontEnd
│   │       └── ec2-frontend.yaml
│   ├── main.yaml
│   ├── SG
│   │   ├── SG-BackEnd
│   │   │   └── sg-backend.yaml
│   │   └── SG-FrontEnd
│   │       └── sg-frontend.yaml
│   └── sg-back-fron.yaml
├── Ej-02
│   ├── EC2
│   │   ├── EC2-BackEnd
│   │   │   └── ec2-backend.yaml
│   │   ├── EC2-DataBase
│   │   │   └── ec2-database.yaml
│   │   ├── EC2-FrontEnd
│   │   │   └── ec2-frontend.yaml
│   │   ├── EC2-LoadBalancer
│   │   │   └── ec2-loadbalancer.yaml
│   │   └── EC2-NFS
│   │       └── ec2-nfs.yaml
│   ├── ec2-back-fron-load-bd.yaml
│   ├── SG
│   │   ├── SG-BackEnd
│   │   │   └── sg-backend.yaml
│   │   ├── SG-DataBase
│   │   │   └── sg-database.yaml
│   │   ├── SG-FrontEnd
│   │   │   └── sg-frontend.yaml
│   │   ├── SG-LoadBalancer
│   │   │   └── sg-backend.yaml
│   │   └── SG-NFS
│   │       └── sg-nfs.yaml
└── └── sg-back-fron-load-bd.yaml
```

En las carpetas de **EC** econtramos los `.yml` para el despliegue de las infraestructuras donde se desarrolla la version de AWS CloudFormation, amis de las imagenes, descripciones, tipos de instancias y grupos de seguridad.

En las carpetas de **SG** encontramos los `.yml` para el despliegue de los grupos de seguridad, estos estan orientados a las necesidades descritas en las practicas 7 y 9.

Por ultimo en el `main.yml`, se llama a todos los `.yml`, para que se puedan desplegar desde un unico archivo.
 

## Ramas

- [IAW 1º Trimestre](https://github.com/alejandroalsa/IAW/tree/IAW-1%C2%BA-Trimestre)

- [IAW 2º Trimestre](https://github.com/alejandroalsa/IAW/tree/IAW-2%C2%BA-Trimestre)


## Descarga

```bash
  git clone https://github.com/alejandroalsa/IAW.git
```
    
## Desarrollador

- [@alejandroalsa](https://www.github.com/alejandroalsa)
