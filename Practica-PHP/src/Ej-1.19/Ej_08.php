<?php
// Función para imprimir la tabla de multiplicar de un número
function tabla_multiplicar($numero) {
    for ($i = 1; $i <= 10; $i++) {
        echo $numero . " x " . $i . " = " . ($numero * $i) . "<br>";
    }
}

// Función para imprimir las tablas de multiplicar entre dos números
function tablas_multiplicar($inicio, $fin) {
    for ($i = $inicio; $i <= $fin; $i++) {
        echo "Tabla de multiplicar del " . $i . ":<br>";
        tabla_multiplicar($i);
        echo "<br>";
    }
}

// Función para inicializar un array de números enteros entre un mínimo y un máximo
function inicializar_array($numero_de_elementos, $min, $max) {
    $array = array();
    for ($i = 0; $i < $numero_de_elementos; $i++) {
        $array[$i] = rand($min, $max);
    }
    return $array;
}

// Función para calcular la media de los valores de un array
function calcular_media($array) {
    $suma = array_sum($array);
    $media = $suma / count($array);
    return $media;
}

// Función para calcular el máximo valor de un array
function calcular_maximo($array) {
    $maximo = max($array);
    return $maximo;
}

// Función para calcular el mínimo valor de un array
function calcular_minimo($array) {
    $minimo = min($array);
    return $minimo;
}

// Función para imprimir un array en una tabla con dos columnas
function imprimir_array($array) {
    echo "<table>";
    echo "<tr><th>Posición</th><th>Valor</th></tr>";
    foreach ($array as $posicion => $valor) {
        echo "<tr><td>" . $posicion . "</td><td>" . $valor . "</td></tr>";
    }
    echo "</table>";
}
?>
