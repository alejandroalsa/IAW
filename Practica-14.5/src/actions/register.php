<?php
    // Llamamos a "db-conection.php" para conectarnos a la Base de Datos
    ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
    require "../../actions/conection/db-conection.php";

    // Definimos una variable para imprimir un mensaje en caso de error y otra para guardar la fecha y hora actuales
    $error = null;
    $registration_date_user=date("Y-m-d H:i:s");
    
    // Definimos que para que se ejecuten el resto de instrucciones, el método de solicitud sea "POST"
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // Comenzamos con el proceso de validación de los tres campos, en esta primera línea validamos que los tres campos estén rellenos
        if (empty($_POST["user_name"]) || empty($_POST["user_surname"]) || empty($_POST["user_email"]) || empty($_POST["user_phone_number"]) || empty($_POST["user_id_business"]) || empty($_POST["user_password"]) || empty($_POST["accept_terms"])) {
            $error = "Por favor rellene todos los campos.";

        // En la segunda línea validamos que el campo de Email contenga un @
        } else if (!str_contains($_POST["user_email"], "@")) {
            $error = "Formato de Email inválido.";

        // Después de pasar los filtros pasamos al último que es la validacion de Email para comprobar que el email introducido no esté ya registrado
        } else {

            // Con la variable "con", realizamos una consulta para comprobar el email en la Base de Datos
            $statement = $con->prepare("SELECT * FROM users WHERE user_email = :user_email");
            $statement->bindParam(":user_email", $_POST["user_email"]);
            $statement->execute();

            // Declaramos una condición, en dicha condición declaramos que si el email es mayor que 0 lo que significaría que el email ya está registrado, enviara el error.
            if ($statement->rowCount() > 0) {
                $error = "Este email ya está registrado";
            } else{

                //Después de validar que el email introducido no esté ya registrado, comprobamos que el ID de Empresa introducido no esté ya registrado con la variable "con"
                $statement = $con->prepare("SELECT * FROM users WHERE user_id_business = :user_id_business");
                $statement->bindParam(":user_id_business", $_POST["user_id_business"]);
                $statement->execute();

                // Declaramos una condición, en dicha condición declaramos que si el ID de Empresa es mayor que 0 lo que significaría que el ID de Empresa ya está registrado, enviara el error.
                if ($statement->rowCount() > 0) {
                    $error = "Este ID de Empresa ya está registrado";
                } else{

                    //Después de validar todos los datos, preparamos la sentencia SQL para introducir los datos enviados por el usuario
                    $con
                    ->prepare("INSERT INTO users (user_name, user_surname, user_email, user_phone_number, user_id_business, user_password, registration_date_user, user_working, user_rol, accept_terms) VALUES (:user_name, :user_surname, :user_email, :user_phone_number, :user_id_business, :user_password, :registration_date_user, :user_working, :user_rol, :accept_terms)")
                    ->execute([ 
                        ":user_name" => $_POST["user_name"],
                        ":user_surname" => $_POST["user_surname"],
                        ":user_email" => $_POST["user_email"],
                        ":user_phone_number" => $_POST["user_phone_number"],
                        ":user_id_business" => $_POST["user_id_business"],
                        ":user_working" => 0,
                        ":user_rol" => "Usuario",
                        ":registration_date_user" => $registration_date_user, 
                        ":user_password" => password_hash($_POST["user_password"], PASSWORD_BCRYPT),
                        ":accept_terms" => $_POST["accept_terms"],
                    ]);

                    $user_id = $con->lastInsertId();

                    $con
                    ->prepare("INSERT INTO remuneration (user_id, hourly_pay) VALUES (:user_id, :hourly_pay)")
                    ->execute([ 
                        ":user_id" => $user_id,
                        ":hourly_pay" => 0,
                    ]);

                    // Definimos una consulta SQL para darle un valor LIMIT al "user_mail" para que así no se pueda repetir y evitar que un usuario introduzca el mismo email
                    $statement = $con->prepare("SELECT * FROM users WHERE user_email = :user_email LIMIT 1");
                    $statement->bindParam(":user_email", $_POST["user_email"]);
                    $statement->execute();
                    $user = $statement->fetch(PDO::FETCH_ASSOC);

                    // Despues de hacer todas las comprovaciones iniciamos la Sesión y redirigimos a "home.php"
                    session_start();
                    $_SESSION["user"] = $user;
                    header("Location: /sections/common/home.php");
                }
            }
        }
    }
?>
