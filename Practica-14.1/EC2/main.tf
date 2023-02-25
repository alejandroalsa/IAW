# Configuramos el proveedor de AWS
provider "aws" {
  region = var.region
}

# Creamos el grupo de seguridad
resource "aws_security_group" "sg_wp_prac14" {
  name        = var.sg_wp_prac14
  description = var.sg_description
}

# Creamos las reglas de entrada del grupo de seguridad. 
# Utilizamos un bucle para recorrer la lista de puertos definida como variable
resource "aws_security_group_rule" "ingress" {
  security_group_id = aws_security_group.sg_wp_prac14.id
  type              = "ingress"

  count       = length(var.allowed_ingress_ports)
  from_port   = var.allowed_ingress_ports[count.index]
  to_port     = var.allowed_ingress_ports[count.index]
  protocol    = "tcp"
  cidr_blocks = ["0.0.0.0/0"]
}

resource "aws_security_group_rule" "egress" {
  security_group_id = aws_security_group.sg_wp_prac14.id
  type              = "egress"

  from_port   = 0
  to_port     = 0
  protocol    = "-1"
  cidr_blocks = ["0.0.0.0/0"]
}

# Creamos una instancia EC2
resource "aws_instance" "instancia_ec2_parac_14_1" {
  ami             = var.ami_id
  instance_type   = var.instance_type
  key_name        = var.key_name
  security_groups = [aws_security_group.sg_wp_prac14.name]

  # user_data = file("scripts/install_docker.sh")

  tags = {
    Name = var.instance_name
  }
}

# Creamos una IP elástica y la asociamos a la instancia
resource "aws_eip" "ip_elastica" {
  instance = aws_instance.instancia_ec2_parac_14_1.id
}

# Mostramos la IP pública de la instancia
output "elastic_ip" {
  value = aws_eip.ip_elastica.public_ip
} 
