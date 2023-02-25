<?php

echo "<h3>Dirección IP</h3>";
echo $_SERVER['SERVER_ADDR'];

echo "<h3>Nombre del Host</h3>";
echo $_SERVER['SERVER_NAME'];

echo "<h3>Software del Servidor</h3>";
echo $_SERVER['SERVER_SOFTWARE'];

echo "<h3>Agente Usuario</h3>";
echo $_SERVER['HTTP_USER_AGENT'];

echo "<h3>Dirección IP del Cliente</h3>";
echo $_SERVER['REMOTE_ADDR'];

?>
