#!/bin/bash

# <------------------------------------------->
# Instalacion de PrestaShop
# <------------------------------------------->

clear

set -x

# Instalacion de la pila LAMP

   . ./lamp_install.sh

# Instalacion de la herramientas para la pila LAMP

   . ./lamp_tools_install.sh

# Instalacion de la PrestaShop

   . ./prestashop_install.sh
    
# Instalacion de certificado SSL

   . ./ssl_install.sh
# <------------------------------------------->
# Instalacion de PrestaShop
# <------------------------------------------->
