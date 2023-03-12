

<?php
    include 'Ej_08.php';

    // Llamar a la función inicializar_array
    $arr = inicializar_array(5, 1, 10);
    var_dump($arr);
    echo "<br>";
    // Llamar a la función calcular_media
    $media = calcular_media($arr);
    echo "La media es: $media\n";
    echo "<br>";
    // Llamar a la función calcular_maximo
    $max = calcular_maximo($arr);
    echo "El máximo es: $max\n";
    echo "<br>";
    // Llamar a la función calcular_minimo
    $min = calcular_minimo($arr);
    echo "El mínimo es: $min\n";
    echo "<br>";
    // Llamar a la función imprimir_array
    imprimir_array($arr);
?>
