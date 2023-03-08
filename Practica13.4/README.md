![LOGO](https://user-images.githubusercontent.com/67869168/221359506-18643ddb-b786-4f64-8ada-f6e0b25f744d.svg)


# PRACTICAS IAW - 2023 - IAW 2º Trimestre - PRACTICA 13.4

En esta practica vamos a realizar la creacion de  la infraestructura necesaria para desplegar la aplicación web propuesta en la práctica 7 y 9.

Para ellos estamos utilizando las funcionalidades de Ansible.

En ambos despliegues se sigue la siguiente estructura:

```txt
├── INFRA-PRAC-07
│   ├── main.yml
│   └── playbooks
│       ├── ec2_backend.yml
│       └── ec2_frontend.yml
├── INFRA-PRAC-09
│   ├── main.yml
│   └── playbooks
│       ├── ec2_data.yml
│       ├── ec2_front_01.yml
│       ├── ec2_front_02.yml
│       ├── ec2_load.yml
└──-----└── ec2_nfs.yml
```

En ambos directorios estan los archivos `main.yml`, donde se llaman al resto de archivos para el despliegue. En cada uno es estos archivos se sigue una estructura basica para el despliegue de los servicios necesarios para cada una de la practicas 7 y 9, donde en cada uno tambien se crean los grupos de seguridad necesarios.

## Ramas

- [IAW 1º Trimestre](https://github.com/alejandroalsa/IAW/tree/IAW-1%C2%BA-Trimestre)

- [IAW 2º Trimestre](https://github.com/alejandroalsa/IAW/tree/IAW-2%C2%BA-Trimestre)


## Descarga

```bash
  git clone https://github.com/alejandroalsa/IAW.git
```
    
## Desarrollador

- [@alejandroalsa](https://www.github.com/alejandroalsa)
