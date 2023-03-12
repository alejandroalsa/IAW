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

// Al ser este una sección de administración añadimos el código para capturar el valor del user_rol y después compararlo
    require "../../actions/cap-admin/cap_admin.php";

// Realizamos la comprobación en el caso de que tenga algo diferente a Administrador redirigimos a home
    if ( $user_admin['user_rol'] != "Administrador" ) {
        header("Location: /sections/common/home.php");
        return;
    }

// Definimos los ID para posteriormente saber que usuario eliminar
    $id = $_GET["id"];

// Ejecutamos las consultas SQL para obtener el ID a eliminar
    $statement = $con->prepare("SELECT * FROM users WHERE id = :id LIMIT 1");
    $statement->execute([":id" => $id]);

// Pequeña medida de seguridad para que cuando un usuario introduzca un ID por su cuenta devuelta un 404 y no bloque la Base de Datos
    if ($statement->rowCount() == 0) {
        http_response_code(404);
        echo("HTTP 404");
    }

// Declaramos la variable de datos para devolver una matriz indexada por nombre de columna como se muestra en su conjunto de resultados. 
    $datos = $statement->fetch(PDO::FETCH_ASSOC);

// Ejecutamos las consultas SQL para eliminar al usuario con el id definido anteriormente
    $con->prepare("DELETE FROM records WHERE user_id = :id")->execute([":id" => $id]);
    $con->prepare("DELETE FROM remuneration WHERE user_id = :id")->execute([":id" => $id]);
    $con->prepare("DELETE FROM users WHERE id = :id")->execute([":id" => $id]);

// Configuracion de Mensajes flash
    $_SESSION["delete_user"] = ["estilo" => "success", "icono" => "check-circle-fill"];

// Redirigimos a index
    header("Location: /sections/admin/users.php");
    return;
?>
