<?php

    $temp = array();

    for ($i = 0; $i < 10; $i++ ) {
         $temp[$i] = rand(1,30);   
    }

    for ($i = 0; $i < 10; $i++ ) {
       echo  $temp[$i];
       echo "<br>";   
    }
?>
