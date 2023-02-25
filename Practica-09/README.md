# Implantación de Wordpress en Amazon Web Services (AWS) sobre la pila LAMP
## Indice

*   **[Arquitectura](#arquitectura)**
*   **[Fases](#fases)**
*   **[Puertos](#puertos)**
*   **[Tareas](#tareas)**
*   **[Descarga](#descarga)**

## Arquitectura
![IMG](https://user-images.githubusercontent.com/67869168/208464402-2c14ad66-aa74-4859-876f-ec72d9b1b21c.png)

*   Balanceador.
*   Frontal Web 1.
*   Frontal Web 2.
*   Servidor NFS.
*   Servidor de Base de Datos MySQL.

## Fases

El repositorio se divide en 3 fases (00, 01 y 02), cada una de las fases es una arquitectura distinta teniendo en la fase 00 una arquitectura unica, en la fase 01 una arquitectura de proxy inverso y en la fase 02 una arquitectura de proxy inverso, servidor de datos y base de datos.

*   **Fase 00** Instalación de Wordpress en un nivel (Un único servidor con todo lo necesario).
*   **Fase 01** Instalación de Wordpress en dos niveles (Un servidor web y un servidor MySQL).
*   **Fase 02** Instalación de Wordpress en tres niveles (Balanceador, 2 Servidores webs, Servidor NFS y Servidor MySQL).

## Puertos

*   **BALANCER** `443`, `80`, `22`
*   **FRONTENDS** `80`, `22`
*   **NFS** `2049`, `22`
*   **BD** `3306`, `22`

## Tareas
Tareas a realizar para llevar a cabo el proyecto con exito.

### Balanceador de carga

Instalar el software necesario:

*   **BASH**
```bash
# Modulos necesarios
    proxy
    proxy_http
    proxy_ajp
    rewrite
    deflate
    headers
    proxy_balancer
    proxy_connect
    proxy_html
    lbmethod_byrequests
```
```
# Archivo 000-default.conf
    <VirtualHost *:80>
        <Proxy balancer://mycluster>
            # Server 1
            BalancerMember http://IP_HTTP_SERVER_1
            # Server 2
            BalancerMember http://IP_HTTP_SERVER_2
        </Proxy>
        ProxyPass / balancer://mycluster/
    </VirtualHost>
```
   
*   **ANSIBLE**
```ansible
# Modulos necesarios
    - name: Activando modulos de Apache
      community.general.apache2_module:
        name: "{{ item }}"
        state: present
      loop:
        - proxy
        - proxy_http
        - proxy_ajp
        - rewrite
        - deflate
        - headers
        - proxy_balancer
        - proxy_connect
        - proxy_html
        - lbmethod_byrequests
```
```
# Archivo 000-default.conf.j2
    <VirtualHost *:80>
        <Proxy balancer://mycluster>
            # Server 1
            BalancerMember http://IP_HTTP_SERVER_1
            # Server 2
            BalancerMember http://IP_HTTP_SERVER_2
        </Proxy>
        ProxyPass / balancer://mycluster/
    </VirtualHost>
```

Instalar y configurar Certbot para solicitar un certificado HTTPS:

*   **BASH**
```bash
# Instalación y actualización de snapd
    snap install core; sudo snap refresh core
```
```
# Instalación de Certbot
    snap install --classic certbot
```
```
# Creación de un alias para Certbot
    ln -s /snap/bin/certbot /usr/bin/certbot
```
```
# Obtención del certificado SSL y configuración de servidor web.
    certbot --apache -m $EMAIL --agree-tos --no-eff-email -d $DOMAIN
```
```
# Archivo 000-default.conf
    <VirtualHost *:80>
        <Proxy balancer://mycluster>
            # Server 1
            BalancerMember http://IP_HTTP_SERVER_1
            # Server 2
            BalancerMember http://IP_HTTP_SERVER_2
        </Proxy>
        ProxyPass / balancer://mycluster/
    </VirtualHost>
```
   
*   **ANSIBLE**
```ansible
- name: Instalando y actualizando snapd
    ansible.builtin.shell: snap install core; snap refresh core
    changed_when: true
    failed_when: false
    when: snapd_install is changed
```
```ansible
- name: Instalando Certbot
  community.general.snap:
    name: certbot
    classic: 
```
```ansible
- name: Creando un alias para Certbot
  ansible.builtin.file:
    src: /snap/bin/certbot
    dest: /usr/bin/certbot
    state: 
```
```ansible
- name: Obteniendo certificado SSL y configurando el servidor web.
  ansible.builtin.command: certbot --apache -m {{ EMAIL }} --agree-tos --no-eff-email -d {{ DOMAIN }}
```

### NFS Server 

Instalar el software necesario, crear el directorio que utilizará para compartir el contenido con los servidores web y configurar el archivo `/etc/exports` para permitir el acceso al directorio compartido solo a los servidores web.

*   **BASH**
```bash
# Instalación nfs server
    apt install nfs-kernel-server -y
```
```
# Configuramos el propietario y el grupo del direcorio que quiero compartir
    chown nobody:nogroup /var/www/html
```
```
# Pasamos el archivo de conf a /etc/exports
    cp ../conf/exports /etc/exports
```
```
# Archivo exports
/var/www/html 172.31.0.0/16(rw,sync,no_root_squash,no_subtree_check)
```
*   **ANSIBLE**
```ansible
- name: Instalación nfs server
  apt:
    name: nfs-kernel-server
```
```ansible
  - name: Creamos el directorio
    ansible.builtin.file:
      path: /var/www/html
      state: directory
      mode: 0755
      owner: nobody
      group: nogroup
```
```ansible
  - name: Añadimos exports
    ansible.builtin.template:
      src: ../../templates/exports.j2
      dest: /etc/exports
      mode: 0644
```
```
# Archivo exports
/var/www/html 172.31.0.0/16(rw,sync,no_root_squash,no_subtree_check)
```
### NFS Client

Configurar el directorio que utilizará para compartir el contenido con los servidores web.

*   **BASH**
```bash
# Instalamos el cliente nfs
    apt install nfs-common -y
```
```
# Montamos NFS SERVER en la máquina cliente
    mount $NFS_SERVER_IP_PRIVATE:/var/www/html /var/www/html
```
```
# Editamos el archivo /etc/fstab para que al iniciar la máquina se monte automáticamente el directorio compartido por          echo "$NFS_SERVER_IP_PRIVATE:/var/www/html /var/www/html nfs auto,nofail,noatime,nolock,intr,tcp,actimeo=1800 0 0" >> fstab
```
```
# Archivo exports
/var/www/html 172.31.0.0/16(rw,sync,no_root_squash,no_subtree_check)
```
*   **ANSIBLE**
```ansible
  - name: Instalamos el cliente nfs
    ansible.builtin.apt:
      name: nfs-common
      state: present
```
```ansible
 - name: Montamos el directorio compartido
    ansible.posix.mount:
      path: /var/www/html
      src: "{{ NFS_SERVER_IP_PRIVATE }}:/var/www/html"
      state: mounted
      fstype: nfs
      opts: auto,nofail,noatime,nolock,intr,tcp,actimeo=1800
```

### Servidores web

Instalar el software necesario y configurar el archivo de Apache para incluir la directiva `AllowOverride All`.

*   **BASH**
```bash
    # Instalamos el servidor web de apache
    apt-get install apache2 -y

    # Instalamos los módulos de PHP
    apt-get install php libapache2-mod-php php-mysql -y
```
```bash
# Copia del archivo 000-default.conf
    cp ../../conf/000-default.conf /etc/apache2/sites-available

# Copia del archivo dir.conf
    cp ../../conf/dir.conf /etc/apache2/mods-available
```
```
<VirtualHost *:80>
        #ServerName www.example.com
        ServerAdmin alejandro@alejandroalsa.es
        DocumentRoot /var/www/html

      <Directory "/var/www/html">
         AllowOverride All
      </Directory>  

        ErrorLog ${APACHE_LOG_DIR}/error.log
        CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>
```
```
<IfModule mod_dir.c>
	DirectoryIndex index.php index.cgi index.pl index.html index.xhtml index.htm
</IfModule>

# vim: syntax=apache ts=4 sw=4 sts=4 sr noet
```

*   **ANSIBLE**
```ansible
    - name: Instalando servidor web Apache2.4
      ansible.builtin.apt:
        name: apache2
        state: present

    - name: Instalando PHP y mudulos de PHP
      ansible.builtin.apt:
        name: "{{ item }}"
        state: present
      loop:
        - php
        - libapache2-mod-php
        - php-mysql
```
```ansible
    - name: Añadimos dir.conf
      ansible.builtin.template:
        src: ../../templates/dir.conf.j2
        dest: /etc/apache2/mods-available/dir.conf
        mode: 0644

    - name: Añadimos 000-default.conf
      ansible.builtin.template:
        src: ../../templates/000-default.conf.j2
        dest: /etc/apache2/sites-available/000-default.conf
        mode: 0644
```

### Servidor de base de datos

Instalar el software necesario y configurar MySQL para que acepte conexiones que no sean de localhost.

*   **BASH**
```
   # Instalacion MSQL Server
    apt-get install mysql-server -y

    # Cambio de las variables mysql para que accepten conexiones desde cualquier interfaz
    sed -i 's/127.0.0.1/0.0.0.0/' /etc/mysql/mysql.conf.d/mysqld.cnf
```


*   **ANSIBLE**
```ansible
    - name: Instalando sistema de base de datos MySQL
      apt:
        name: mysql-server
        state: present

    - name: Modificando variables de MySQL para que acepte conexiones desde cualquier direccion IP
      ansible.builtin.replace:
        path: /etc/mysql/mysql.conf.d/mysqld.cnf
        regexp: 127.0.0.1
        replace: 0.0.0.0
```

## Descarga

```
git clone https://github.com/alejandroalsa/IAW.git
```
