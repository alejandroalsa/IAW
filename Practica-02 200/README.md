# IAW Practica 02
> Alejandro Alfaro Sánchez 24 Oct 2022

## Índice

* **Creación de la Instancia en AWS** [🔗](#creación-de-la-instancia-en-aws)
* **Configuración de la Instancia de AWS** [🔗](#configuración-de-la-instancia-de-aws)
* **Token** [🔗](#token)
* **Descarga** [🔗](#descarga)

## Creación de la Instancia en AWS

Primer paso será crear una instancia en AWS, para ello, daremos clic en `Launch Instances` y después en `Launch Instances`

![Cap-01](https://user-images.githubusercontent.com/67869168/198238575-e44eab4a-2e3c-4c22-98b6-28bf22056ed6.png)

Después de lanzar la instalación se nos abrirá un panel para configurar la máquina,  lo primero que tendremos que hacer es ponerle un nombre en mi caso `RedHat`. 

![Cap-02](https://user-images.githubusercontent.com/67869168/198239241-b6970a2a-213a-41df-a2c8-7c96e631f96a.png)

El segundo paso será elegir el S.O que instalaremos y elegir la arquitectura que usaremos.

![Cap-03](https://user-images.githubusercontent.com/67869168/198239536-105e1152-99f5-45af-a8b0-aceb977180c7.png)

Seleccionaremos la cantidad de recursos que le asignaremos a la instancia, en esta caso al ser `RedHat` es recomendable instalar un `t2.medium` contara con  `2vCPU` y `4Gb RAM`.

![Cap-04](https://user-images.githubusercontent.com/67869168/198240162-7197a003-4185-435f-a43b-6b6f26a6489c.png).

En el siguiente paso tendremos que elegir la `Clave de Inicio de Sesión`.

![Cap-05](https://user-images.githubusercontent.com/67869168/198240600-b3e26336-5cfb-4f0f-9f6a-96330b9d6ed7.png)

Por último solo quedará revisar la configuración y lanzar la instancia.

![Cap-06](https://user-images.githubusercontent.com/67869168/198240923-089e31f7-9c6a-4780-aa85-a6f762722a8d.png)

## Configuración de la Instancia de AWS*

Antes de poder utilizar nuestra instancia es importante realizar dos últimas configuraciones.

### IP Estática

En nuestro panel tendremos que dirigirnos a la zona de `Network & Security` y `Elastic IP`.

![Cap-07](https://user-images.githubusercontent.com/67869168/198241586-d58c29c2-24ae-4435-a4c0-637a85429957.png)

En el panel tendremos que seleccionar `Allocate Elastic IP Address`.

![Cap-08](https://user-images.githubusercontent.com/67869168/198242523-437651d2-40bc-46f7-8b2b-16d8203483bd.png)

Después seleccionaremos las características que necesitemos, en mi caso el grupo y el tipo de IP (IPv4).

![Cap-09](https://user-images.githubusercontent.com/67869168/198243004-753eb5f0-dabe-418c-90d8-84eadcfd2f88.png)

De vuelta al panel seleccionaremos la IP que acabamos de crear y la asignaremos a nuestra instancia, para ello: `Actions` -> `Asociate Elastic IP adrress`.

![Cap-10](https://user-images.githubusercontent.com/67869168/198243405-cb2bdbcd-20a9-46ed-95b5-94091383d170.png)

Seleccionamos nuestra instancia y la añadimos.

![Cap-11](https://user-images.githubusercontent.com/67869168/198244013-4d84d26e-99bf-43fb-a22e-3b96138d144b.png)

### Configuración de Puertos

En nuestra sección de instancias veremos que en el apartado de `Security` veremos los `Inbound rules` es decir, los puertos habilitados.

![Cap-12](https://user-images.githubusercontent.com/67869168/198244342-959fb66f-1351-4287-bdb4-79608a423529.png)

Para editarlos, clicaremos en el enlace de `Security groups` y después en `Edit inbound rules`.

![Cap-13](https://user-images.githubusercontent.com/67869168/198244984-ffb1e695-b15b-4ae3-9d90-9ddfcdbe3208.png)

Añadimos los puestos necesarios y permitiremos que cualquiera se pueda conectar.

![Cap-14](https://user-images.githubusercontent.com/67869168/198245384-d0f0ae62-7d6b-4b53-9457-2d826aa6dee0.png)

## Token

```
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
```

## Descarga

```
git clone https://github.com/alejandroalsa/IAW.git
```
