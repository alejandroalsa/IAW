<?php
    $num = 1;
    while ($num <= 10) {
        echo "<h2>Tabla del: $num   </h2>";
        echo "<table border='1'>";
        $i = 1;
        while  ($i <= 10) {
            $res = $num * $i;
            echo "<tr>";
            echo "<td>$i</td>";
            echo "<td>X</td>";
            echo "<td>$i</td>";
            echo "<td>=</td>";
            echo "<td>$res</td>";
            $i ++;
        }
        echo "</tr>";
        echo "</table>";
        $num ++;
    }
?>
