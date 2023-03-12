<!----------------------------------------------------------------------------------------------------------------------------------------------------------------->
<!---- PHP ---->
<!----------------------------------------------------------------------------------------------------------------------------------------------------------------->
<?php
  require('../../actions/login.php');
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
  <main>
    <div class="container">
      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-7 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="/assets/img/logo.png" alt="">
                  <h5 class="card-title fs-2 fw-semibold text-center">Time Control</h5>
                </a>
              </div><!-- End Logo -->

              <div class="card">

                <div class="card-body">

                  <div>
                    <h5 class="card-title text-center pb-0 fs-4">Ingrese a su cuenta</h5>
                    <p class="text-center small">Ingrese su E-Mail y Contraseña para iniciar sesión</p>
                  </div>

                  <form class="row g-3 needs-validation" method="POST" action="login.php" novalidate>
                    <?php if ($error): ?>
                        <div class="alert alert-danger bg-danger text-light border-0 alert-dismissible fade show" role="alert">
                          <i class="bi bi-exclamation-triangle-fill"></i>
                          <strong>¡ Error !</strong> <?= $error ?>
                          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif ?>
                    <div class="col-12">
                      <label for="user_email" class="form-label">E-Mail</label>
                      <div class="input-group has-validation">
                        <input type="text" name="user_email" class="form-control" id="user_email" placeholder="Su E-Mail" required>
                        <div class="invalid-feedback">Por favor, introduzca su nombre de usuario.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="user_password" class="form-label">Contraseña</label>
                      <input type="password" name="user_password" class="form-control" id="user_password"  placeholder="Su contraseña" required>
                      <div class="invalid-feedback">Por favor, introduzca su contraseña.</div>
                    </div>

                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Iniciar Sesión</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">¿No tienes cuenta? <a href="register.php">Crea una cuenta</a></p>
                    </div>
                  </form>
                </div>
              </div>
              <div class="credits">
                Desarrollado por <a href="https://diwes.es/">Diwes</a>
              </div>

            </div>
          </div>
        </div>
      </section>
    </div>
  </main>
  <!-- ======= SCRIPTS ======= -->
  <?php
    require('../../partials/scripts/scripts.php');
  ?>
</body>
</html>
