![LOGO](https://user-images.githubusercontent.com/67869168/221359506-18643ddb-b786-4f64-8ada-f6e0b25f744d.svg)


# PRACTICAS IAW - 2023 - IAW 2º Trimestre - PRACTICA 13.3

En esta practica vamos a realizar la creacion de las infraestructuras descritas en los enuncionados de los ejercicios.

Para ellos estamos utilizando las funcionalidades de aws-python-boto3.

En ambos despliegues se sigue la siguiente estructura:

```txt
├── Ej-01
│   ├── aws.py
│   ├── main.py
│   └── __pycache__
│       └── aws.cpython-310.pyc
├── Ej-02
│   ├── aws.py
│   ├── main.py
│   └── __pycache__
│       └── aws.cpython-310.pyc
├── Ej-03
│   ├── aws.py
│   ├── delete_infra.py
│   ├── main.py
│   └── __pycache__
│       └── aws.cpython-310.pyc
├── Ej-04
│   ├── aws.py
│   ├── ej_01.yml
│   ├── ej_02.yml
│   ├── ej_03.yml
└── └── main.py
```

En las carpetas se encuentra un archivo comun (`main.py`), donde se llama a los demas archivos para poder desplegar lso archivos de una forma unica.

En cada carpera se siguen las siguientes caracteristicas:

* **Ej-01** Un script de Python para crear un grupo de seguridad con el nombre backend-sg. Añada las siguientes reglas al grupo de seguridad:
  * Acceso SSH (puerto 22/TCP) desde cualquier dirección IP.
  * Acceso al puerto 3306/TCP desde cualquier dirección IP.
* **Ej-02** Un script de Python para crear una instancia EC2 que tengas las siguientes características.
  * Identificador de la AMI: ami-08e637cea2f053dfa. Esta AMI se corresponde con la imagen Red Hat Enterprise Linux 9 (HVM).
  * Número de instancias: 1
  * Tipo de instancia: t2.micro
  * Clave privada: vockey
  * Grupo de seguridad: backend-sg
  * Nombre de la instancia: backend
* **Ej-03** Un script para crear la infraestructura de la práctica 9 y un script para eliminar la infraestructura de la práctica 9.
* **Ej-04** Modificacion de los ejemplos 7 y 14 de [este repositorio](https://github.com/josejuansanchez/aws-python-boto3) que utilizan boto3.resource, para añadir una nuevas funcionalidades. Por ejemplo, a la hora de crear una nueva instancia EC2 el programa puede mostrar al usuario una lista de AMIs disponibles y una lista de tipos de instancia.

## Ramas

- [IAW 1º Trimestre](https://github.com/alejandroalsa/IAW/tree/IAW-1%C2%BA-Trimestre)

- [IAW 2º Trimestre](https://github.com/alejandroalsa/IAW/tree/IAW-2%C2%BA-Trimestre)


## Descarga

```bash
  git clone https://github.com/alejandroalsa/IAW.git
```
    
## Desarrollador

- [@alejandroalsa](https://www.github.com/alejandroalsa)
