<?php
function imprimir_array($array) {
    echo "<table>";
    echo "<tr><th>Posición</th><th>Valor</th></tr>";
    foreach ($array as $posicion => $valor) {
        echo "<tr><td>" . $posicion . "</td><td>" . $valor . "</td></tr>";
    }
    echo "</table>";
}

$array_numeros = array(2, 4, 6, 8, 10);
imprimir_array($array_numeros);

?>