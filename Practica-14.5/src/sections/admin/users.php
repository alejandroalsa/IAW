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
// Realizamos una consulta SQL para obtener los datos de los emlpeados
  $records = $con->query("SELECT user_name, user_surname, user_phone_number, user_id_business, registration_date_user, user_email, user_rol, id FROM users");
  $remuneration = $con->query("SELECT hourly_pay FROM remuneration");

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
      <h1>Empleados</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Admin / Empleados</a></li>
        </ol>
      </nav>
    </div>

    <?php
      require('../../partials/flash-menssages/flash_menssages.php');
    ?>

    <section class="section Perfil">
      <div class="row align-items-top">
        <?php foreach ($records as $datos) : ?>
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header">ID: <?= $datos["user_id_business"]?></div>
                  <div class="card-body">
                  <div class="tab-pane fade show active Perfil-overview" id="Perfil-overview">
                    <h5 class="card-title"><?= $datos["user_name"]?> <?= $datos["user_surname"]?></h5>
                    <div class="row">
                      <div class="col-lg-3 col-md-4 label ">E-Mail</div>
                      <div class="col-lg-9 col-md-8"><?= $datos["user_email"]?></div>
                    </div>
                    <div class="row">
                      <div class="col-lg-3 col-md-4 label ">Teléfono</div>
                      <div class="col-lg-9 col-md-8"><?= $datos["user_phone_number"]?></div>
                    </div>
                    <?php foreach ($remuneration as $hourly_pay) :
                    if ($hourly_pay["user_id"] == $datos["user_id"]) : ?>
                      <div class="row">
                        <div class="col-lg-3 col-md-4 label ">Remuneración hora</div>
                        <div class="col-lg-9 col-md-8"><?= $hourly_pay["hourly_pay"]?></div>
                      </div>
                    <?php
                      break;
                      endif;
                      endforeach 
                    ?>
                    <div class="row">
                      <div class="col-lg-3 col-md-4 label ">Rol</div>
                      <div class="col-lg-9 col-md-8"><?= $datos["user_rol"]?></div>
                    </div>
                    <div class="row">
                      <div class="col-lg-3 col-md-4 label ">Fecha de Registro</div>
                      <div class="col-lg-9 col-md-8"><?= $datos["registration_date_user"]?></div>
                    </div>
                  </div>
                  </div>
              <div class="card-footer text-center">
                  <a href="/actions/users/edit-user-admin.php?id=<?= $datos["id"] ?>" class="btn btn-success mb-2">Editar Usuario</a>
                  <a href="/actions/users/delete-user.php?id=<?= $datos["id"] ?>" class="btn btn-danger mb-2">Eliminar Usuario</a>
              </div>
            </div>
        </div>
        <?php endforeach ?>
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
