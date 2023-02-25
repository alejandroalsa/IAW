# Configuramos el proveedor de AWS
provider "aws" {
  region = var.region
}

# -----------------------------------------
# Creamos los grupos de seguridad
resource "aws_security_group" "sg_frontend" {
  name        = var.sg_name_frontend
  description = var.sg_description_frontend
}

resource "aws_security_group" "sg_backend" {
  name        = var.sg_name_backend
  description = var.sg_description_backend
}

resource "aws_security_group" "sg_loadbalancer" {
  name        = var.sg_name_loadbalancer
  description = var.sg_description_loadbalancer
}

resource "aws_security_group" "sg_nfs" {
  name        = var.sg_name_nfs
  description = var.sg_description_nfs
}
# -----------------------------------------


# -----------------------------------------
# Creamos las reglas de entrada del grupo de seguridad. 
# Utilizamos un bucle para recorrer la lista de puertos definida como variable
resource "aws_security_group_rule" "ingress" {
  security_group_id = aws_security_group.sg_frontend.id
  type              = "ingress"

  count       = length(var.allowed_ingress_ports_frontend)
  from_port   = var.alloweallowed_ingress_ports_frontendd_ingress_ports[count.index]
  to_port     = var.allowed_ingallowed_ingress_ports_frontendress_ports[count.index]
  protocol    = "tcp"
  cidr_blocks = ["0.0.0.0/0"]
}

resource "aws_security_group_rule" "ingress2" {
  security_group_id = aws_security_group.sg_backend.id
  type              = "ingress"

  count       = length(var.allowed_ingress_ports_backend)
  from_port   = var.allowed_ingress_ports_backend[count.index]
  to_port     = var.allowed_ingress_ports_backend[count.index]
  protocol    = "tcp"
  cidr_blocks = ["0.0.0.0/0"]
}

resource "aws_security_group_rule" "ingress3" {
  security_group_id = aws_security_group.sg_loadbalancer.id
  type              = "ingress"

  count       = length(var.allowed_ingress_ports_loadbalancer)
  from_port   = var.allowed_ingress_ports_loadbalancer[count.index]
  to_port     = var.allowed_ingress_ports_loadbalancer[count.index]
  protocol    = "tcp"
  cidr_blocks = ["0.0.0.0/0"]
}

resource "aws_security_group_rule" "ingress4" {
  security_group_id = aws_security_group.sg_nfs.id
  type              = "ingress"

  count       = length(var.allowed_ingress_ports_nfs)
  from_port   = var.allowed_ingress_ports_nfs[count.index]
  to_port     = var.allowed_ingress_ports_nfs[count.index]
  protocol    = "tcp"
  cidr_blocks = ["0.0.0.0/0"]
}
# -----------------------------------------


# -----------------------------------------
# Creamos las instancias EC2
resource "aws_instance" "FRONTEND_01" {
  ami             = var.ami_id
  instance_type   = var.instance_type
  key_name        = var.key_name
  security_groups = [aws_security_group.sg_frontend.name]

  tags = {
    Name = var.instance_name_frontend_01
  }
}

resource "aws_instance" "FRONTEND_02" {
  ami             = var.ami_id
  instance_type   = var.instance_type
  key_name        = var.key_name
  security_groups = [aws_security_group.sg_backend.name]

  tags = {
    Name = var.instance_name_frontend_02
  }
}

resource "aws_instance" "BACKEND_01" {
  ami             = var.ami_id
  instance_type   = var.instance_type
  key_name        = var.key_name
  security_groups = [aws_security_group.sg_frontend.name]

  tags = {
    Name = var.instance_name_backend
  }
}

resource "aws_instance" "LOADBALANCER_01" {
  ami             = var.ami_id
  instance_type   = var.instance_type
  key_name        = var.key_name
  security_groups = [aws_security_group.sg_loadbalancer.name]

  tags = {
    Name = var.instance_name_loadbalancer
  }
}

resource "aws_instance" "NFS_01" {
  ami             = var.ami_id
  instance_type   = var.instance_type
  key_name        = var.key_name
  security_groups = [aws_security_group.sg_nfs.name]

  tags = {
    Name = var.instance_name_nfs
  }
}
# -----------------------------------------


# -----------------------------------------
# Creamos una IP elástica y la asociamos a la instancia
resource "aws_eip" "ip_elastica" {
  instance = aws_instance.LOADBALANCER_01.id
}
# -----------------------------------------
