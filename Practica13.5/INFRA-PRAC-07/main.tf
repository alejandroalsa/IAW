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

# -----------------------------------------


# -----------------------------------------
# Creamos las reglas de entrada del grupo de seguridad. 
# Utilizamos un bucle para recorrer la lista de puertos definida como variable
resource "aws_security_group_rule" "ingress" {
  security_group_id = aws_security_group.sg_frontend.id
  type              = "ingress"

  count       = length(var.allowed_ingress_ports_frontend)
  from_port   = var.allowed_ingress_ports_frontend[count.index]
  to_port     = var.allowed_ingress_ports_frontend[count.index]
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
# -----------------------------------------


# -----------------------------------------
# Creamos las instancias EC2
resource "aws_instance" "FRONTEND_01" {
  ami             = var.ami_id
  instance_type   = var.instance_type
  key_name        = var.key_name
  security_groups = [aws_security_group.sg_frontend.name]

  tags = {
    Name = var.instance_name_frontend
  }
}

resource "aws_instance" "BACKEND_01" {
  ami             = var.ami_id
  instance_type   = var.instance_type
  key_name        = var.key_name
  security_groups = [aws_security_group.sg_backend.name]

  tags = {
    Name = var.instance_name_backend
  }
}
# -----------------------------------------


# -----------------------------------------
# Creamos una IP elástica y la asociamos a la instancia
resource "aws_eip" "ip_elastica" {
  instance = aws_instance.FRONTEND_01.id
}
# -----------------------------------------
