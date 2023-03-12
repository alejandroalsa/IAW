<?php
function calcular_media($array) {
    $suma = array_sum($array);
    $cantidad = count($array);
    if ($cantidad > 0) {
        return $suma / $cantidad;
    } else {
        return 0;
    }
}
$array_numeros = array(2, 4, 6, 8, 10);
$media = calcular_media($array_numeros);
echo "La media es: " . $media;

?>