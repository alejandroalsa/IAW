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
    
    $total = array_sum($temp) / 10;

    echo "<br>";   
    echo "Media del array = $total";
    echo "<br>";
    echo "Valor Máximo del array = ", max($temp);
    echo "<br>";
    echo "Valor Minimo del array = ", min($temp);

?>
