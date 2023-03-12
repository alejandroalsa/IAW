<?php
function inicializar_array($numero_de_elementos, $min, $max) {
    $array = array();
    for ($i = 0; $i < $numero_de_elementos; $i++) {
        $array[] = rand($min, $max);
    }
    return $array;
}

$array_numeros = inicializar_array(5, 1, 10);
print_r($array_numeros);

?>