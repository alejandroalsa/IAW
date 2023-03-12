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
      <h1>Informar de Errores</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">APP / Informar de Errores</li>
        </ol>
      </nav>
    </div>


    <div class="card">
        <div class="card-body">
            <h5 class="card-title fs-2 fw-semibold text-center">Informar sobre un Error</h5>
            <form class="row g-3" action="send_mail.php" method="POST">
                <div class="col-md-4">
                    <label class="form-label" for="name">Nombre</label>
                    <input type="text" class="form-control" placeholder="Su nombre" id="name" name="name" required>
                </div>
                <div class="col-md-4">
                    <label class="form-label" for="surename">Apellidos</label>
                    <input type="text" class="form-control" placeholder="Sus apellidos" id="surename" name="surename" required>
                </div>
                <div class="col-md-4">
                    <label class="form-label" for="user">ID Empresa</label>
                    <div class="input-group">
                        <span class="input-group-text" id="inputGroupPrepend2">ID</span>
                        <input type="text" class="form-control" placeholder="Su identificador personal en la empresa" id="user" name="user" aria-describedby="inputGroupPrepend2" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <label class="form-label" user="email">Correo Electrónico</label>
                    <input type="text" class="form-control" placeholder="Correo electrónico con el que se registró" id="email" name="email" required>
                </div>
                <div class="col-md-4">
                    <label class="form-label"for="country">Nivel del Error</label>
                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                        <option value="bajo">Bajo</option>
                        <option value="medio">Medio</option>
                        <option value="alto">Alto</option>
                        <option value="critico">Critico</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label class="form-label" user="email">URL del Error</label>
                    <div class="input-group">
                        <span class="input-group-text" id="inputGroupPrepend2">https://</span>
                        <input type="text" class="form-control" placeholder="URL de la página donde encontró el Error" id="email" name="email" required>
                    </div>
                </div>
                <div>
                    <label class="form-label" for="menssage">Error</label>
                    <textarea class="form-control" placeholder="Describa el error encontrado" id="menssage" name="menssage" style="height: 100px"></textarea>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary" type="submit">Enviar Informe</button>
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
