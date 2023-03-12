<?php
function calcular_minimo($array) {
    if (count($array) > 0) {
        $minimo = $array[0];
        for ($i = 1; $i < count($array); $i++) {
            if ($array[$i] < $minimo) {
                $minimo = $array[$i];
            }
        }
        return $minimo;
    } else {
        return null;
    }
}

$array_numeros = array(2, 4, 6, 8, 10);
$minimo = calcular_minimo($array_numeros);
echo "El valor mínimo es: " . $minimo;

?>