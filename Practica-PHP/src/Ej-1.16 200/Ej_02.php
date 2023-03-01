<?php
    $nota = rand(0,10);


    if ($nota == 0 || $nota == 1 || $nota == 2 || $nota == 3 || $nota == 4){
        echo "NOTA: <strong>$nota</strong> = Insuficiente 😡";
    }
    if ($nota == 5){
        echo "NOTA: <strong>$nota</strong> = Suficiente 😠";
    }
    if ($nota == 6){
        echo "NOTA: <strong>$nota</strong> = Bien 😞";
    }
    if ($nota == 7 || $nota == 8){
        echo "NOTA: <strong>$nota</strong> = Notable 😀";
    }
    if ($nota == 9 || $nota == 10){
        echo "NOTA: <strong>$nota</strong> = Sobresaliente 😁";
    }
?>
