<?php
    $dia = rand(1,7);

    switch ($dia) {
        case 1:
            echo "Hoy es <strong>LUNES</strong> ($dia)";
            break;
        case 2:
            echo "Hoy es <strong>MARTES</strong> ($dia)";
            break;
        case 3:
            echo "Hoy es <strong>MIERCOLES</strong> ($dia)";
            break;
        case 4:
            echo "Hoy es <strong>JUEVES</strong> ($dia)";
            break;
        case 5:
            echo "Hoy es <strong>VIERNES</strong> ($dia)";
            break;
        case 6:
            echo "Hoy es <strong>SABADO</strong> ($dia)";
            break;
        case 7:
            echo "Hoy es <strong>DOMINGO</strong> ($dia)";
            break;
    }
?>




