<?php
// Llamamos a "db-conection.php" para conectarnos a la Base de Datos
    require "../../actions/conection/db-conection.php";

// Reanudamos la sesión a través de una Cookie
    session_start();

// En el caso de que la sesión no este iniciada redirigimos a login
    if (!isset($_SESSION["user"])) {
        header("Location: /sections/common/login.php");
        return;
    }

// Definimos los ID para posteriormente saber que usuario editar
    $id = $_GET["id"];

// Ejecutamos las consultas SQL para autocompletar los campos del formulario con los datos ya definidos
    $statement = $con->prepare("SELECT * FROM users WHERE id = :id LIMIT 1");
    $statement->execute([":id" => $id]);

// Pequeña medida de seguridad para que cuando un usuario introduzca un id por su cuenta devuelta un 404 y no bloque la Base de Datos
    if ($statement->rowCount() == 0) {
        http_response_code(404);
        echo("HTTP 404");
    }

// Definimos la variable de update_user para obterner su ID
    $datos = $statement->fetch(PDO::FETCH_ASSOC);

// Definimos una variable para imprimir un mensaje en caso de error
    $error = null;

    // Definimos que el método de petición sea POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Definimos que no pueden estas vacíos los campos de "user_name" , "user_surname" y "user_phone_number"
        if (empty($_POST["user_name"]) || empty($_POST["user_surname"]) || empty($_POST["user_phone_number"])) {
            $error = "Por favor rellene todos los campos.";
        }else {

            // Ejecutamos las consultas SQL, en ellas definimos que por defecto los valores a enviar sean los validados.
            $statement = $con->prepare("UPDATE users SET user_name = :user_name, user_surname = :user_surname, user_phone_number = :user_phone_number WHERE id = :id");
            $statement->execute([
                    ":id" => $id,
                    ":user_name" => $_POST["user_name"],
                    ":user_surname" => $_POST["user_surname"],
                    ":user_phone_number" => $_POST["user_phone_number"],
                ]
            );
            // Definimos un mensaje flash para indicarle que sus datos han sido modificados con éxito
            $_SESSION["update_data_user"] = ["estilo" => "success", "icono" => "check-circle-fill"];
            // Redirigimos a index
            header("Location: /sections/common/account.php");
            return;
        }
    }
?>
