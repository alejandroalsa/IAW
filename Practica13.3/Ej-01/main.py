import aws

# Reglas para el grupo de seguridad
ingress_permissions = [
    {'CidrIp': '0.0.0.0/0', 'IpProtocol': 'tcp', 'FromPort': 22, 'ToPort': 22},    
    {'CidrIp': '0.0.0.0/0', 'IpProtocol': 'tcp', 'FromPort': 3306, 'ToPort': 3306}]

# Pedimos por teclado el nombre para el grupo de seguridad
group_name = input("Introduce el nombre del grupo de seguridad: ")

# Pedimos por teclado una descripcion del grupo de seguridad
description = input("Introduce una descripcion para el grupo de seguridad: ")

# Creamos el grupo de seguridad
aws.create_security_group(group_name, description, ingress_permissions)
