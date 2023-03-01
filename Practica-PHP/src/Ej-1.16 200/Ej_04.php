<?php
    $dado = rand(1,6);

    if ($dado == 1){
        echo "<img src='https://upload.wikimedia.org/wikipedia/commons/1/1b/Dice-1-b.svg' alt='1'>";
    } elseif ($dado == 2) {
        echo "<img src='https://upload.wikimedia.org/wikipedia/commons/5/5f/Dice-2-b.svg' alt='2'>";
    } elseif ($dado == 3) {
        echo "<img src='https://upload.wikimedia.org/wikipedia/commons/b/b1/Dice-3-b.svg' alt='3'>";
    } elseif ($dado == 4) {
        echo "<img src='https://upload.wikimedia.org/wikipedia/commons/f/fd/Dice-4-b.svg' alt='4'>";
    } elseif ($dado == 5) {
        echo "<img src='https://upload.wikimedia.org/wikipedia/commons/0/08/Dice-5-b.svg' alt='5'>";
    } elseif ($dado == 6) {
        echo "<img src='https://upload.wikimedia.org/wikipedia/commons/2/26/Dice-6-b.svg' alt='6'>";
    };
?>
