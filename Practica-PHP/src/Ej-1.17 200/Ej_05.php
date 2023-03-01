<?php

    for ($num = 1; $num <= 10; $num ++) {
        echo "<h2>Tabla del: $num   </h2>";
        echo "<table border='1'>";
        for ($i = 1; $i <= 10; $i ++) {
            $res = $num * $i;
            echo "<tr>";
            echo "<td>$i</td>";
            echo "<td>X</td>";
            echo "<td>$i</td>";
            echo "<td>=</td>";
            echo "<td>$res</td>";
        }
        echo "</tr>";
        echo "</table>";
    }
?>
