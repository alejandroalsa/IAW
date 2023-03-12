<?php
    // Llamamos a "db-conection.php" para conectarnos a la Base de Datos
    require "../../actions/conection/db-conection.php";
    
    // Definimos una variable para imprimir un mensaje en caso de error
    $error = null;
    
    // Definimos que el método de petición sea POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // Comenzamos con el proceso de validación de los dos campos, en esta primera línea validamos que los tres campos estén rellenos
        if (empty($_POST["user_email"]) || empty($_POST["user_password"])) {
            $error = "Por favor rellene todos los campos.";

        // En la segunda línea validamos que el campo de Email contenga un @
        } else if (!str_contains($_POST["user_email"], "@")) {
            $error = "Formato de Email inválido.";

        // Después de pasar los filtros pasamos al último que es la validacion de Email para comprobar que el email introducido no esté ya registrado
        } else {

            // Con la variable "con", realizamos una consulta para comprobar el email en la Base de Datos
            $statement = $con->prepare("SELECT * FROM users WHERE user_email = :user_email LIMIT 1");
            $statement->bindParam(":user_email", $_POST["user_email"]);
            $statement->execute();

            // Declaramos una condición, en dicha condición declaramos que si el email no es igual a 0 lo que en este caso que las los emails coincidan, enviara el error.
            if ($statement->rowCount() == 0) {
                $error = "Email o Contraseña incorrectos";
            } else {
                $user = $statement->fetch(PDO::FETCH_ASSOC);

                // En este paso comprobamos que la contraseña introducida por el usuario corresponda al email introducido en el paso anterior.
                if (!password_verify($_POST["user_password"], $user["user_password"])) {
                    $error = "Email o Contraseña incorrectos";
                } else {

                    // Despues de hacer todas las comprovaciones iniciamos la Sesión y redirigimos a "home.php"
                    session_start();
                    unset($user["user_password"]);
                    $_SESSION["user"] = $user;
                    header("Location: /sections/common/home.php");
                }
            }
        }
    }
?>
