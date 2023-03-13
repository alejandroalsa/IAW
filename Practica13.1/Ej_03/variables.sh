PROTOCOL=tcp
SSH_PORT=22
HTTP_PORT=80
HTTPS_PORT=443
MYSQL_PORT=3306
NFS_PORT=2049
CIDR=0.0.0.0/0

SECURITY_GROUP_NAME_BALANCER=SG-Balancer
DESCRIPTION_BALANCER="Grupo de seguridad para balanceadores de carga"

SECURITY_GROUP_NAME_FRONTEND_BALANCER=SG-Frontend-Balancer
DESCRIPTION_FRONTEND_BALANCER="Grupo de seguridad para los frontend con balanceador de carga"

SECURITY_GROUP_NAME_BACKEND=SG-Backend
DESCRIPTION_BACKEND="Grupo de seguridad para los backend"

SECURITY_GROUP_NAME_NFS_SERVER=SG-NFS-Server
DESCRIPTION_NFS_SERVER="Grupo de seguridad para los NFS Server"

IMAGE_ID=ami-0b93ce03dcbcb10f6
COUNT=1
INSTANCE_TYPE=t2.small
KEY_NAME=vockey

INSTANCE_NAME_BALANCER=iaw-practica-09-balancer

INSTANCE_NAME_FRONTEND_01=iaw-practica-09-frontend-01

INSTANCE_NAME_FRONTEND_02=iaw-practica-09-frontend-02

INSTANCE_NAME_BACKEND=iaw-practica-09-backend

INSTANCE_NAME_NFS_SERVER=iaw-practica-09-nfs-server