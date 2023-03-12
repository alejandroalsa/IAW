<!----------------------------------------------------------------------------------------------------------------------------------------------------------------->
<!---- PHP ---->
<!----------------------------------------------------------------------------------------------------------------------------------------------------------------->
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Llamamos a "db-conection.php" para conectarnos a la Base de Datos
    require "../../actions/conection/db-conection.php";

// Reanudamos la sesión a través de una Cookie
    session_start();

// En el caso de que la Sesión no este iniciada redirigimos a login
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

// Definimos los id para posteriormente saber que usuario editar
    $id = $_GET["id"];

// Ejecutamos las consultas SQL para autocompletar los campos del formulario con los datos ya definidos
    $statement = $con->prepare("SELECT * FROM users WHERE id = :id LIMIT 1");
    $statement->execute([":id" => $id]);
    $datos = $statement->fetch(PDO::FETCH_ASSOC);

    $remuneration = $con->prepare("SELECT * FROM remuneration WHERE user_id = :user_id LIMIT 1");
    $remuneration->execute([":user_id" => $id]);
    $datos2 = $remuneration->fetch(PDO::FETCH_ASSOC);

// Pequeña medida de seguridad para que cuando un usuario introduzca un id por su cuenta devuelta un 404 y no bloque la Base de Datos
    if ($statement->rowCount() == 0) {
        http_response_code(404);
        echo("HTTP 404");
    }

// Definimos la variable de datos para obterner su ID

// Definimos una variable para imprimir un mensaje en caso de error
    $error = null;

    // Definimos que el método de petición sea POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Definimos que no pueden estas vacíos los campos de "user_surname", "user_email", "user_phone_number" y "user_id_business"
        if (empty($_POST["user_name"]) || empty($_POST["user_surname"]) || empty($_POST["user_email"]) || empty($_POST["user_phone_number"]) || empty($_POST["user_id_business"])) {
            $error = "Por favor rellene todos los campos.";
        }else {

            $second_cents = $_POST["hourly_pay"] / 3600;
        
            // Ejecutamos las consultas SQL, en ellas definimos que por defecto los valores a enviar sean los validados.
            $statement = $con->prepare("UPDATE users SET user_name = :user_name, user_surname = :user_surname, user_phone_number = :user_phone_number, user_id_business = :user_id_business, user_email = :user_email, user_rol = :user_rol WHERE id = :id");
            $statement->execute([
                    ":id" => $id,
                    ":user_name" => $_POST["user_name"],
                    ":user_surname" => $_POST["user_surname"],
                    ":user_phone_number" => $_POST["user_phone_number"],
                    ":user_email" => $_POST["user_email"],
                    ":user_id_business" => $_POST["user_id_business"],
                    ":user_rol" => $_POST["user_rol"],
                ]
            );

            // Ejecutamos las consultas SQL, en ellas definimos que por defecto los valores a enviar sean los validados.
            $remuneration = $con->prepare("UPDATE remuneration SET hourly_pay = :hourly_pay, second_cents = :second_cents WHERE user_id = :user_id");
            $remuneration->execute([
                    ":user_id" => $id,
                    ":hourly_pay" => $_POST["hourly_pay"],
                    ":second_cents" => $second_cents,
                ],
            );

            // Definimos un mensaje flash para indicarle al usuario que la sesión se ha iniciado correctamente donde definimos un estilo y un icono
            $_SESSION["update_data_user"] = ["estilo" => "success", "icono" => "check-circle-fill"];
            // Redirigimos a users
            header("Location: /sections/admin/users.php");
            return;
        }
    }
?>
<!----------------------------------------------------------------------------------------------------------------------------------------------------------------->
<!---- PHP ---->
<!----------------------------------------------------------------------------------------------------------------------------------------------------------------->

<!DOCTYPE html>
<html lang="es">

<?php
  require('../../partials/head/head.php');
?>

<body>

  <!-- ======= NAV TOP ======= -->
  <?php
    require('../../partials/nav/nav_top.php');
  ?>

  <!-- ======= NAV LATERAL ======= -->
  <?php
    require('../../partials/nav/nav_lateral.php');
  ?>

  <main id="main" class="main mt-5">
    <div class="pagetitle">
      <h1>Editar Datos de Empleados</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Admin / Editar Datos</a></li>
        </ol>
      </nav>
    </div>

<!-- PHP para incluir el mensaje de error -->
            <!-- Si se establece un valor a "$error" se ejecutará esta parte del código, en este caso el mensaje de error -->
    <?php if ($error): ?>
        <div class="alert alert-danger bg-danger text-light border-0 alert-dismissible fade show" role="alert">
            <i class="bi bi-exclamation-triangle-fill"></i>
            <strong>¡Error!</strong> <?= $error ?>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif ?>
<!-- PHP para incluir el mensaje de error -->

    <section class="section Perfil">
        <div class="row align-items-top">
            <div class="card p-3">
                <h2 class="card-title "><?= $datos["user_name"]?> <?= $datos["user_surname"]?></h2>
                <form method="POST" action="edit-user-admin.php?id=<?= $datos["id"] ?>">
                    <div class="row mb-3">
                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Nombre</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="user_name" type="text" class="form-control" id="user_name" value="<?= $datos["user_name"]?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Apellidos</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="user_surname" type="text" class="form-control" id="user_surname" value="<?= $datos["user_surname"]?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">E-Mail</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="user_email" type="text" class="form-control" id="user_email" value="<?= $datos["user_email"]?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Teléfono</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="user_phone_number" type="text" class="form-control" id="user_phone_number" value="<?= $datos["user_phone_number"]?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">ID Empleado</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="user_id_business" type="text" class="form-control" id="user_id_business" value="<?= $datos["user_id_business"]?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Remuneración hora</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="hourly_pay" type="text" class="form-control" id="hourly_pay" value="<?= $datos2["hourly_pay"]?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Rol</label>
                        <div class="col-md-8 col-lg-9">
                            <select class="form-select" aria-label="Default select example" name="user_rol" id="user_rol">
                                <option value="<?= $datos["user_rol"]?>" selected><?= $datos["user_rol"]?></option>
                                <option value="Usuario">Usuario</option>
                                <option value="Administrador">Administrador</option>
                            </select>
                        </div>
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Actualizar Datos</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
  </main>

  <!-- ======= FOOTER ======= -->
  <?php
    require('../../partials/footer/footer.php');
  ?>

  <!-- ======= SCRIPTS ======= -->
  <?php
    require('../../partials/scripts/scripts.php');
  ?>

</body>
</html>
