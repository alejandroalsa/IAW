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
      <h1>Preguntas</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">APP / Preguntas</a></li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="accordion" id="accordionPanelsStayOpenExample">


        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="false" aria-controls="panelsStayOpen-collapseOne">
                ¿Cómo me registro?
            </button>
            </h2>
            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne">
            <div class="accordion-body">
                Para poder acceder a la aplicación web es necesario registrarse antes, para ello tiene ir al siguiente enlace: <a href="/www/pane-admin/actions/register.php">Registrarse</a>.
            </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                ¿Cómo inicio sesión?
            </button>
            </h2>
            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
            <div class="accordion-body">
                Para poder acceder a la aplicación web es necesario iniciar sesión antes, para ello tiene ir al siguiente enlace: <a href="/www/pane-admin/actions/login.php">Iniciar Sesión</a>.
            </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                ¿Cómo inicio una Jornada Laboral?
            </button>
            </h2>
            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
            <div class="accordion-body">
                Para poder iniciar una Jornada Laboral tiene que dirigirse al siguiente enlace: <a href="/www/pane-admin/sections/common/home.php">Iniciar Jornada</a> una vez iniciada su sesión, después le aparecerá un botón en el centro de la pantalla de color verde donde pondrá "Iniciar Jornada", tendrá que pulsarlo para iniciar su Jornada Laboral, recuerde que no podrá iniciar varias jornadas.
            </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingFour">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
                ¿Cómo finalizo una Jornada Laboral?
            </button>
            </h2>
            <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFour">
            <div class="accordion-body">
                Para poder finalizar una Jornada Laboral tiene que dirigirse al siguiente enlace: <a href="/www/pane-admin/sections/common/home.php">Finalizar Jornada</a> una vez iniciada su sesión, después le aparecerá un botón en el centro de la pantalla de color rojo donde pondrá "Finalizar Jornada", tendrá que pulsarlo para finalizar su Jornada Laboral.
            </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingFive">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false" aria-controls="panelsStayOpen-collapseFive">
                ¿Cómo recupero mi contraseña?
            </button>
            </h2>
            <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFive">
            <div class="accordion-body">
                En el caso de que no se acuerde de su, contraseña tendrá que ponerse en contacto con el administrador de la APP: <a href="mailto:alejandro@alejandroalsa.es?Subject=Solicitud%20recuperación%20de%20contraseña">Solicitar recuperación de contraseña</a>
            </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingSix">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSix" aria-expanded="false" aria-controls="panelsStayOpen-collapseSix">
                ¿Cómo elimino mi cuenta?
            </button>
            </h2>
            <div id="panelsStayOpen-collapseSix" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingSix">
            <div class="accordion-body">
                Para poder eliminar su cuenta tendrá que ponerse en contacto con el administrador de la APP: <a href="mailto:alejandro@alejandroalsa.es?Subject=Solicitud%20eliminacion%20de%20cuenta">Solicitar eliminación de cuenta</a>
            </div>
            </div>
        </div>

    </div>

  </main><!-- End #main -->

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
