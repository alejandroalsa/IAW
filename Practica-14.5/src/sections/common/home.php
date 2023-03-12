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

// Definimos dos variables una para guardar la hora actual y otra para guardar la fecha actual
    $hora_actual=date("H:i:s");
    $fecha_actual=date("Y-m-d");

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
      <h1>Inicio</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Panel / Inicio</li>
        </ol>
      </nav>
    </div>

    <?php
      require('../../partials/flash-menssages/flash_menssages.php');
    ?>

    <div class="card text-center">
        <di class="card-body">
            <h5 class="card-title fs-2 fw-semibold">Iniciar Jornada</h5>
            <p class="card-text"><strong>Día:</strong> <span><?= $fecha_actual?></span> <strong>Hora:</strong> <span id="hora"></span></p>
              <form method="POST" action="../../actions/working-day/start-working.php" class="d-inline-block">
                <button class="btn btn-success me-2 mx-auto">Iniciar Jornada</button>
              </form>
              <form method="POST" action="../../actions/working-day/stop-working.php" class="d-inline-block">
                <button class="btn btn-danger ml-2 mx-auto">Detener Jornada</button>
              </form>
        </div>
    </div>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title fs-3 fw-semibold">Jornadas Recientes</h5>
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
