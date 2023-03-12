<?php
    // Obtenemos el valor del campo user_rol del usuario con la sesión iniciada para compararlo después.
    $admin = $con->query("SELECT user_rol FROM users WHERE id = {$_SESSION['user']['id']}"); 
    $admin->execute();
    $user_admin = $admin->fetch(PDO::FETCH_ASSOC); 
?>
