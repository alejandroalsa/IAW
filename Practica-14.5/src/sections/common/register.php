<!----------------------------------------------------------------------------------------------------------------------------------------------------------------->
<!---- PHP ---->
<!----------------------------------------------------------------------------------------------------------------------------------------------------------------->
<?php
  require('../../actions/register.php');
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
                  <h5 class="card-title fs-2 fw-semibold text-center">Time Control</h5>
                </a>
              </div>

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Crea una cuenta</h5>
                    <p class="text-center small">Ingrese sus datos personales para crear una cuenta</p>
                  </div>

                  <form class="row g-3 needs-validation" novalidate method="POST" action="register.php">
                    <?php if ($error): ?>
                        <div class="alert alert-danger bg-danger text-light border-0 alert-dismissible fade show" role="alert">
                          <i class="bi bi-exclamation-triangle-fill"></i>
                          <strong>¡ Error !</strong> <?= $error ?>
                          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif ?>
                    <div class="col-12">
                      <label for="user_name" class="form-label">Nombre</label>
                      <div class="input-group has-validation">
                        <input type="text" name="user_name" class="form-control" id="user_name" placeholder="Su Nombre" required>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="user_surname" class="form-label">Apellidos</label>
                      <div class="input-group has-validation">
                        <input type="text" name="user_surname" class="form-control" id="user_surname" placeholder="Sus Apellidos" required>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="user_email" class="form-label">E-Mail</label>
                      <div class="input-group has-validation">
                        <input type="text" name="user_email" class="form-control" id="user_email" placeholder="Su E-Mail" required>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="user_phone_number" class="form-label">Teléfono</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">+34</span>
                        <input type="text" name="user_phone_number" class="form-control" id="user_phone_number" placeholder="Su Teléfono" required>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="user_id_business" class="form-label">ID Empresa</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">ID</span>
                        <input type="text" name="user_id_business" class="form-control" id="user_id_business" placeholder="Su ID de Empresa" required>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="user_password" class="form-label">Contraseña</label>
                      <div class="input-group has-validation">
                        <input type="password" name="user_password" class="form-control" id="user_password" placeholder="Su contraseña" required>
                      </div>
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" name="accept_terms" type="checkbox" value="Acepta los terminos" id="accept_terms" required>
                        <label class="form-check-label" for="accept_terms">Estoy de acuerdo y acepto los <a href="#">términos y condiciones</a></label>
                      </div>
                    </div>

                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Registrarse</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">¿Ya tienes una cuenta? <a href="login.php">Iniciar sesión</a></p>
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
