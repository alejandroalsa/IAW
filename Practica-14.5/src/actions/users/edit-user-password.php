<?php
// Llamamos a "db-conection.php" para conectarnos a la Base de Datos
    require "../../actions/conection/db-conection.php";

// Reanudamos la sesión a través de una Cookie
    session_start();

// En el caso de que la Sesión no esté iniciada, redirigimos a login
    if (!isset($_SESSION["user"])) {
        header("Location: /sections/common/login.php");
        return;
    }

// Definimos los ID para posteriormente saber qué usuario editarr
    $id = $_GET["id"];

// Ejecutamos las consultas SQL para autocompletar los campos del formulario con los datos ya definidos
    $statement = $con->prepare("SELECT * FROM users WHERE id = :id LIMIT 1");
    $statement->execute([":id" => $id]);

// Pequeña medida de seguridad para que cuando un usuario introduzca un, ID por su cuenta devuelta un 404 y no bloque la Base de Dato
    if ($statement->rowCount() == 0) {
        http_response_code(404);
        echo("HTTP 404");
    }

// Definimos la variable de datos para obtener su ID
    $datos = $statement->fetch(PDO::FETCH_ASSOC);

// Definimos una variable para imprimir un mensaje en caso de error
    $error = null;

    // Definimos que el método de petición sea POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Definimos que no pueden estas vacíos los campos de "user_password_old" y "user_password_new"
        if (empty($_POST["user_password_old"]) || empty($_POST["user_password_new"])) {
            $error = "Por favor rellene todos los campos.";
        } else {
            // Obtenemos la contraseña del usuario con su ID asociado
            $statement = $con->prepare("SELECT user_password FROM users WHERE id = :id LIMIT 1");
            $statement->execute([":id" => $id]);
            $user = $statement->fetch(PDO::FETCH_ASSOC);

            // En este paso comprobamos que la contraseña introducida por el usuario corresponda a su contraseña actual
            if (!password_verify($_POST["user_password_old"], $user["user_password"])) {
                $_SESSION["update_password_error"] = ["estilo" => "danger", "icono" => "exclamation-triangle-fill"];
                header("Location: /sections/common/account.php");
                return;
            } else {
            
            // Ejecutamos las consultas SQL, en ellas definimos que por defecto los valores a enviar sean los validados.
            $statement = $con->prepare("UPDATE users SET user_password = :user_password WHERE id = :id");
            $statement->execute([
                    ":user_password" => password_hash($_POST["user_password_new"], PASSWORD_BCRYPT),
                    ":id" => $id,
                ]
            );
            // Definimos un mensaje flash para indicarle al usuario que la contraseña ha sido cambiada con éxito
            $_SESSION["update_data_user"] = ["estilo" => "success", "icono" => "check-circle-fill"];
            // Redirigimos a index
            header("Location: /sections/common/account.php");
            return;
            }  
        }
    }
?>
