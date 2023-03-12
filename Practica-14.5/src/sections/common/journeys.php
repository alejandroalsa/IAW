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

// Requerimos a cap_admin.php para saber si para este usuario tenemos que mostrar los campos de administrador
    require "../../actions/cap-admin/cap_admin.php";

// Realizamos una consulta SQL para obtener la hora de entrada, hora de salida y total de horas del usuario cuyo "user_id" sea el de la sesión iniciada
    $records = $con->query("SELECT entry_hour, exit_hour, total_hours, id FROM records WHERE user_id = {$_SESSION['user']['id']}");

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
      <h1>Jornadas</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Panel / Total Jornadas</li>
        </ol>
      </nav>
    </div>

    <div class="card">
      <div class="card-body">
        <h5 class="card-title fs-3 fw-semibold">Todas las Jornadas</h5>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Hora de Entrada</th>
              <th scope="col">Hora de Salida</th>
              <th scope="col">Horas Totales</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($records as $datos) : ?>
              <tr>
                <td><?= $datos["id"]?></td>
                <td><?= $datos["entry_hour"]?></td>
                <td><?= $datos["exit_hour"]?></td>
                <td><?= $datos["total_hours"]?></td>
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
