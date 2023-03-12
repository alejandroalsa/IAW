<?php
    //Comprobamos que la sesión esté iniciada
    session_start();
    //Después la destruimos
    session_destroy();
    // Y redirigimos a "login.php"
    header("Location: /sections/common/login.php");
?>
