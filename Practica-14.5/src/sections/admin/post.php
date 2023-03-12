<!----------------------------------------------------------------------------------------------------------------------------------------------------------------->
<!---- PHP ---->
<!----------------------------------------------------------------------------------------------------------------------------------------------------------------->
<?php
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
// Realizamos una consulta SQL para obtener la hora de entrada, hora de salida id de empresa, total de su remuneración y el total de horas del usuario cuyo "user_id" sea el de la sesión iniciada
$records = $con->query("SELECT user_email FROM users");
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

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Enviar Mensaje</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Admin / Enviar Mensaje</li>
        </ol>
      </nav>
    </div>
    
    <?php
      require('../../partials/flash-menssages/flash_menssages.php');
    ?>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title fs-2 fw-semibold text-center">Enviar mensaje a un empleado</h5>
            <form class="row g-3" action="../../actions/send-email/send-email.php" method="POST">
                <div class="col-md-7">
                    <label class="form-label" for="name">Empleado</label>
                    <select class="form-select" id="email_send" name="email_send" aria-label="Floating label select example">
                        <?php foreach ($records as $datos) : ?>
                            <option value="<?= $datos["user_email"]?>"><?= $datos["user_email"]?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="col-md-7">
                    <label class="form-label" for="subjet">Asunto</label>
                    <input type="text" class="form-control" placeholder="Asunto del Mensaje" id="subjet" name="subjet" required>
                </div>
                <div class="col-md-7">
                    <label class="form-label" for="menssage">Mensaje</label>
                    <textarea class="form-control" id="menssage" placeholder="Escriba aquí su mensaje" name="menssage" required></textarea>
                </div>

                <div class="col-12">
                    <button class="btn btn-primary" type="submit">Enviar E-Mail</button>
                </div>
            </form>
        </div>
    </div>
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
