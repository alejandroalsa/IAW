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
    $records = $con->query("SELECT user_name, user_id_business, entry_hour, exit_hour, total_hours, total_remuneration, user_surname FROM records, users WHERE users.id = records.user_id");

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
      <h1>Jornadas de los Empleados</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Admin / Jornadas de los Empleados</li>
        </ol>
      </nav>
    </div>

    <div class="card">
      <div class="card-body">
        <h5 class="card-title fs-3 fw-semibold">Jornadas de los Empleados</h5>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Nombre</th>
              <th scope="col">ID Empresa</th>
              <th scope="col">Hora de Entrada</th>
              <th scope="col">Hora de Salida</th>
              <th scope="col">Horas Totales</th>
              <th scope="col">Remuneración</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($records as $datos) : ?>
              <tr>
                <td><?= $datos["user_name"]?></td>
                <td><?= $datos["user_id_business"]?></td>
                <td><?= $datos["entry_hour"]?></td>
                <td><?= $datos["exit_hour"]?></td>
                <td><?= $datos["total_hours"]?></td>
                <td><?= $datos["total_remuneration"]?></td>
              </tr>
            <?php endforeach ?>
          </tbody>
        </table>
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
