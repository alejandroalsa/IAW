<?php
function calcular_maximo($array) {
    if (count($array) > 0) {
        $maximo = $array[0];
        for ($i = 1; $i < count($array); $i++) {
            if ($array[$i] > $maximo) {
                $maximo = $array[$i];
            }
        }
        return $maximo;
    } else {
        return null;
    }
}
$array_numeros = array(2, 4, 6, 8, 10);
$maximo = calcular_maximo($array_numeros);
echo "El valor máximo es: " . $maximo;

?>