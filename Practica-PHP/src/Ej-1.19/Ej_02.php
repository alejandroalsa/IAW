<?php
function tablasMultiplicarEntre($inicio, $fin) {
    for ($i = $inicio; $i <= $fin; $i++) {
        echo "Tabla de multiplicar del " . $i . ":<br>";
        for ($j = 1; $j <= 10; $j++) {
            echo $i . " x " . $j . " = " . ($i * $j) . "<br>";
        }
        echo "<br>";
    }
}


tablasMultiplicarEntre(2, 4);

?>