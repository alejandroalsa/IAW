<?php

    $temp = array();

    $i = 0;
    while ( $i <= 10 ) {
         $temp[$i] = rand(1,30);
         $i++;
    }

    echo "<table border='1'>";
    $i = 0;
    while ( $i <= 10 ) {
       echo "<td>$temp[$i]</td>";
       $i++;
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
