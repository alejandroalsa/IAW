variable "region" {
  description = "Región de AWS donde se creará la instancia"
  type        = string
  default     = "us-east-1"
}


# -----------------------------------------
# Puertos para las cinco instancias

variable "allowed_ingress_ports_frontend" {
  description = "Puertos de entrada del grupo de seguridad"
  type        = list(number)
  default     = [22, 80]
}

variable "allowed_ingress_ports_backend" {
  description = "Puertos de entrada del grupo de seguridad"
  type        = list(number)
  default     = [22, 3306]
}

variable "allowed_ingress_ports_loadbalancer" {
  description = "Puertos de entrada del grupo de seguridad"
  type        = list(number)
  default     = [22, 80, 443]
}

variable "allowed_ingress_ports_nfs" {
  description = "Puertos de entrada del grupo de seguridad"
  type        = list(number)
  default     = [22, 2049]
}
# -----------------------------------------


# -----------------------------------------
# Nombre para las dos instancias y descripcion

variable "sg_name_frontend" {
  description = "Grupo de seguridad FRONTEND"
  type        = string
  default     = "sg_frontend"
}

variable "sg_description_frontend" {
  description = "Descripcion del grupo de seguridad FRONTEND"
  type        = string
  default     = "Grupo de seguridad para la instancia FRONTEND"
}

variable "sg_name_backend" {
  description = "Grupo de seguridad BACKEND"
  type        = string
  default     = "sg_backend"
}

variable "sg_description_backend" {
  description = "Descripcion del grupo de seguridad BACKEND"
  type        = string
  default     = "Grupo de seguridad para la instancia BACKEND"
}

variable "sg_name_loadbalancer" {
  description = "Grupo de seguridad LOADBALANCER"
  type        = string
  default     = "sg_loadbalancer"
}

variable "sg_description_loadbalancer" {
  description = "Descripcion del grupo de seguridad LOADBALANCER"
  type        = string
  default     = "Grupo de seguridad para la instancia LOADBALANCER"
}

variable "sg_name_nfs" {
  description = "Grupo de seguridad NFS"
  type        = string
  default     = "sg_nfs"
}

variable "sg_description_nfs" {
  description = "Descripcion del grupo de seguridad NFS"
  type        = string
  default     = "Grupo de seguridad para la instancia NFS"
}
# -----------------------------------------


# -----------------------------------------
# AMIs para las instancias

variable "ami_id" {
  description = "Identificador de la AMI"
  type        = string
  default     = "ami-00874d747dde814fa"
}
# -----------------------------------------


# -----------------------------------------
# Tipos de instancias

variable "instance_type" {
  description = "Tipo de instancia"
  type        = string
  default     = "t2.small"
}
# -----------------------------------------


# -----------------------------------------
# Clave publica

variable "key_name" {
  description = "Nombre de la clave pública"
  type        = string
  default     = "vockey"
}
# -----------------------------------------


# -----------------------------------------
# Nombres de las instancias

variable "instance_name_frontend_01" {
  description = "Nombre de la instancia FRONTEND_01"
  type        = string
  default     = "FRONTEND_01"
}

variable "instance_name_frontend_02" {
  description = "Nombre de la instancia FRONTEND_02"
  type        = string
  default     = "FRONTEND_02"
}

variable "instance_name_backend" {
  description = "Nombre de la instancia BACKEND"
  type        = string
  default     = "BACKEND_01"
}

variable "instance_name_loadbalancer" {
  description = "Nombre de la instancia LOADBALANCER"
  type        = string
  default     = "LOADBALANCER_01"
}

variable "instance_name_nfs" {
  description = "Nombre de la instancia NFS"
  type        = string
  default     = "NFS_01"
}
# -----------------------------------------
