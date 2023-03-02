<?php

    $temp = array();

    for ($i = 0; $i < 10; $i++ ) {
         $temp[$i] = rand(1,30);   
    }

    echo "<table border='1'>";
    for ($i = 0; $i < 10; $i++ ) {
       echo "<td>$temp[$i]</td>";
    }
    echo "</tr>";
    echo "</table>";
    echo "<br>";
    
        
    $maximo = $temp[0];
    $posicion_maximo = 0;


    for ($i = 1; $i <= 10; $i++) {
        if ($temp[$i] > $maximo) {
            $maximo = $temp[$i];
            $posicion_maximo = $i;
        }
    }

    echo "<br>";   
    echo "Media del array = $total";
    echo "<br>";
    echo "Valor Máximo del array = $maximo";
    echo "<br>";
    echo "Posicion del Valor Máximo del array = $posicion_maximo";
    echo "<br>";
    echo "Valor Minimo del array = ", min($temp);

?>
