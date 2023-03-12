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

// Definimos una variable que contiene un array para almacenar los resultados de la siguiente consulta, esto se hace para que se pueda consultar a la misma consulta más de una vez
    $result_set = array();

// Realizamos una consulta para obtener los datos de la cuenta del usuario asociado al ID de la sesión actual
    $records = $con->query("SELECT user_name, user_surname, user_phone_number, user_id_business, registration_date_user, user_email, user_rol, id FROM users WHERE id = {$_SESSION['user']['id']}");

// Iteración sobre el conjunto de resultados obtenidos sobre la consulta anterior guardándolos en el array result_set
    while ($row = $records->fetch(PDO::FETCH_ASSOC)) {
      $result_set[] = $row;
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

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Perfil</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
          <li class="breadcrumb-item">Usuarios</li>
          <li class="breadcrumb-item active">Perfil</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <?php
      require('../../partials/flash-menssages/flash_menssages.php');
    ?>
    <section class="section Perfil">
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body Perfil-card pt-4 d-flex flex-column align-items-center">

              <img src="/assets/img/profile-img.jpg" alt="Perfil" class="rounded-circle">
              <?php foreach ($result_set as $datos) : ?>
                <h2><?= $datos["user_name"]?> <?= $datos["user_surname"]?></h2>
                <h3><?= $datos["user_rol"]?></h3>
              <?php endforeach ?>
            </div>
          </div>
        </div>
        <div class="col-xl-8">
          <div class="card">
            <div class="card-body pt-3">
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#Perfil-overview">Descripción general</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#Perfil-edit">Editar perfil</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#Perfil-change-password">Cambia contraseña</button>
                </li>

              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active Perfil-overview" id="Perfil-overview">

                  <h5 class="card-title">Detalles del perfil</h5>
                  <?php foreach ($result_set as $datos) : ?>
                    <div class="row">
                      <div class="col-lg-3 col-md-4 label ">Nombre</div>
                      <div class="col-lg-9 col-md-8"><?= $datos["user_name"]?></div>
                    </div>

                    <div class="row">
                      <div class="col-lg-3 col-md-4 label ">Apellidos</div>
                      <div class="col-lg-9 col-md-8"><?= $datos["user_surname"]?></div>
                    </div>

                    <div class="row">
                      <div class="col-lg-3 col-md-4 label ">E-Mail</div>
                      <div class="col-lg-9 col-md-8"><?= $datos["user_email"]?></div>
                    </div>

                    <div class="row">
                      <div class="col-lg-3 col-md-4 label ">Teléfono</div>
                      <div class="col-lg-9 col-md-8"><?= $datos["user_phone_number"]?></div>
                    </div>

                    <div class="row">
                      <div class="col-lg-3 col-md-4 label ">ID Empresa</div>
                      <div class="col-lg-9 col-md-8"><?= $datos["user_id_business"]?></div>
                    </div>

                    <div class="row">
                      <div class="col-lg-3 col-md-4 label ">Rol</div>
                      <div class="col-lg-9 col-md-8"><?= $datos["user_rol"]?></div>
                    </div>
                  <?php endforeach ?>

                </div>

                <div class="tab-pane fade Perfil-edit pt-3" id="Perfil-edit">
                  <p>Para actualizar datos como E-Mail, ID Empresa o Rol, póngase en contacto con un administrador</p>

                  <!-- Perfil Edit Form -->
                  <?php foreach ($result_set as $datos) : ?>
                    <form method="POST" action="../../actions/users/edit-user.php?id=<?= $datos["id"] ?>">
                      <div class="row mb-3">
                        <label for="user_name" class="col-md-4 col-lg-3 col-form-label">Nombre</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="user_name" type="text" class="form-control" id="user_name" value="<?= $datos["user_name"]?>">
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="user_surname" class="col-md-4 col-lg-3 col-form-label">Apellidos</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="user_surname" type="text" class="form-control" id="user_surname" value="<?= $datos["user_surname"]?>">
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="user_phone_number" class="col-md-4 col-lg-3 col-form-label">Teléfono</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="user_phone_number" type="text" class="form-control" id="user_phone_number" value="<?= $datos["user_phone_number"]?>">
                        </div>
                      </div>

                      <div class="text-center">
                        <button type="submit" class="btn btn-primary">Actualizar Datos</button>
                      </div>
                    </form>
                  <?php endforeach ?>
                </div>

                <div class="tab-pane fade pt-3" id="Perfil-change-password">
                  <!-- Change Password Form -->
                  <form method="POST" action="../../actions/users/edit-user-password.php?id=<?= $datos["id"] ?>">

                    <div class="row mb-3">
                      <label for="user_password_old" class="col-md-4 col-lg-3 col-form-label">Contraseña actual</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="user_password_old" type="password" class="form-control" id="user_password_old" required>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="user_password_new" class="col-md-4 col-lg-3 col-form-label">Nueva contraseña</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="user_password_new" type="password" class="form-control" id="user_password_new" required>
                      </div>
                    </div>

                    <!-- <div class="row mb-3">
                      <label for="user_password_new" class="col-md-4 col-lg-3 col-form-label">Repetir contraseña</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                      </div>
                    </div> -->

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Actualizar Contraseña</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
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
