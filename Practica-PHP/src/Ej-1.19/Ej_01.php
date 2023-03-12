<?php
function tablaMultiplicar($numero) {
    for ($i = 1; $i <= 10; $i++) {
        echo $numero . " x " . $i . " = " . ($numero * $i) . "<br>";
    }
}

tablaMultiplicar(5);
?>