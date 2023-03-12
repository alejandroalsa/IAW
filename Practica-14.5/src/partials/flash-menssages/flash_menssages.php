<!-- Mensaje flash ¡Jornada Iniciada! -->
      <!-- Definimos si la variable "$_SESSION["flash_start_day"]" existe -->
<?php if (isset($_SESSION["flash_start_day"])): ?>
                            <!-- Definimos el contenido que tendrá la variable en este caso estilo -->
    <div class="alert alert-<?= $_SESSION["flash_start_day"]["estilo"]?> bg-<?= $_SESSION["flash_start_day"]["estilo"]?> text-light border-0 alert-dismissible fade show" role="alert">
                        <!-- Definimos el contenido que tendrá la variable en este caso icono -->
        <i class="bi bi-<?= $_SESSION["flash_start_day"]["icono"] ?>"></i>
        <strong>Jornada Iniciada</strong>, usted ha iniciado su jornada el día: <strong><?= $fecha_actual?> a las: <?= $hora_actual?></strong>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <!-- Destruimos la variable "$_SESSION["flash_start_day"]" localmente -->
    <?php unset($_SESSION["flash_start_day"]) ?>
<?php endif ?>
<!-- Mensaje flash ¡Jornada Iniciada! -->


<!-- Mensaje flash ¡Jornada Detenida! -->
<?php if (isset($_SESSION["flash_stop_day"])): ?>
    <div class="alert alert-<?= $_SESSION["flash_stop_day"]["estilo"]?> bg-<?= $_SESSION["flash_stop_day"]["estilo"]?> text-light border-0 alert-dismissible fade show" role="alert">
        <i class="bi bi-<?= $_SESSION["flash_stop_day"]["icono"] ?>"></i>
        <strong>Jornada Detenida</strong>,usted ha finalizado su jornada el día: <strong><?= $fecha_actual?></strong> a las: <strong><?= $hora_actual?></strong>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php unset($_SESSION["flash_stop_day"]) ?>
<?php endif ?>
<!-- Mensaje flash ¡Jornada Detenida! -->


<!-- Mensaje flash ¡Error Jornada Iniciada! -->
<?php if (isset($_SESSION["error_start_day"])): ?>
    <div class="alert alert-<?= $_SESSION["error_start_day"]["estilo"]?> bg-<?= $_SESSION["error_start_day"]["estilo"]?> text-light border-0 alert-dismissible fade show" role="alert">
        <i class="bi bi-<?= $_SESSION["error_start_day"]["icono"] ?>"></i>
        <strong>¡Error!</strong>, usted ya tiene una <strong>Jornada Iniciada.</strong>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php unset($_SESSION["error_start_day"]) ?>
<?php endif ?>
<!-- Mensaje flash ¡Error Jornada Iniciada! -->


<!-- Mensaje flash ¡Usuario Actualizado! -->
<?php if (isset($_SESSION["update_data"])): ?>
    <div class="alert alert-<?= $_SESSION["update_data"]["estilo"]?> bg-<?= $_SESSION["update_data"]["estilo"]?> text-light border-0 alert-dismissible fade show" role="alert">
        <i class="bi bi-<?= $_SESSION["update_data"]["icono"] ?>"></i>
        <strong>Usuario Actualizado</strong>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php unset($_SESSION["update_data"]) ?>
<?php endif ?>
<!-- Mensaje flash Usuario Actualizado -->

<!-- Mensaje flash ¡Usuario Eliminado! -->
<?php if (isset($_SESSION["delete_user"])): ?>
    <div class="alert alert-<?= $_SESSION["delete_user"]["estilo"]?> bg-<?= $_SESSION["delete_user"]["estilo"]?> text-light border-0 alert-dismissible fade show" role="alert">
        <i class="bi bi-<?= $_SESSION["delete_user"]["icono"] ?>"></i>
        <strong>Usuario Eliminado</strong>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php unset($_SESSION["delete_user"]) ?>
<?php endif ?>
<!-- Mensaje flash Usuario Eliminado -->


<!-- Mensaje flash ¡Datos Actualizados! -->
<?php if (isset($_SESSION["update_data_user"])): ?>
    <div class="alert alert-<?= $_SESSION["update_data_user"]["estilo"]?> bg-<?= $_SESSION["update_data_user"]["estilo"]?> text-light border-0 alert-dismissible fade show" role="alert">
        <i class="bi bi-<?= $_SESSION["update_data_user"]["icono"] ?>"></i>
        <strong>Datos Actualizados</strong>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php unset($_SESSION["update_data_user"]) ?>
<?php endif ?>
<!-- Mensaje flash ¡Datos Actualizados! -->

<!-- Mensaje flash ¡Contraseña Actualizada! -->
<?php if (isset($_SESSION["update_password"])): ?>
    <div class="alert alert-<?= $_SESSION["update_password"]["estilo"]?> bg-<?= $_SESSION["update_password"]["estilo"]?> text-light border-0 alert-dismissible fade show" role="alert">
        <i class="bi bi-<?= $_SESSION["update_password"]["icono"] ?>"></i>
        <strong>Contraseña Actualizada</strong>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php unset($_SESSION["update_password"]) ?>
<?php endif ?>
<!-- Mensaje flash ¡Contraseña Actualizada! -->

<!-- Mensaje flash ¡Contraseña Actualizada! -->
<?php if (isset($_SESSION["update_password_error"])): ?>
    <div class="alert alert-<?= $_SESSION["update_password_error"]["estilo"]?> bg-<?= $_SESSION["update_password_error"]["estilo"]?> text-light border-0 alert-dismissible fade show" role="alert">
        <i class="bi bi-<?= $_SESSION["update_password_error"]["icono"] ?>"></i>
        <strong>¡Error!</strong> la contraseña actual es incorrecta.
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php unset($_SESSION["update_password_error"]) ?>
<?php endif ?>
<!-- Mensaje flash ¡Contraseña Actualizada! -->

<!-- Mensaje flash ¡ID de Empresa Registrado! -->
<?php if (isset($_SESSION["error_id_business_registered"])): ?>
    <div class="alert alert-<?= $_SESSION["error_id_business_registered"]["estilo"]?> bg-<?= $_SESSION["error_id_business_registered"]["estilo"]?> text-light border-0 alert-dismissible fade show" role="alert">
        <i class="bi bi-<?= $_SESSION["error_id_business_registered"]["icono"] ?>"></i>
        <strong>Error</strong> el ID de Empresa ya está registrado.
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php unset($_SESSION["error_id_business_registered"]) ?>
<?php endif ?>
<!-- Mensaje flash ¡ID de Empresa Registrado! -->

<!-- Mensaje flash ¡E-Mail Registrado! -->
<?php if (isset($_SESSION["error_email_registered"])): ?>
    <div class="alert alert-<?= $_SESSION["error_email_registered"]["estilo"]?> bg-<?= $_SESSION["error_email_registered"]["estilo"]?> text-light border-0 alert-dismissible fade show" role="alert">
        <i class="bi bi-<?= $_SESSION["error_email_registered"]["icono"] ?>"></i>
        <strong>Error</strong> la direccion de E-Mail ID ya está registrada.
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php unset($_SESSION["error_email_registered"]) ?>
<?php endif ?>
<!-- Mensaje flash ¡E-Mail Registrado! -->

<!-- Mensaje flash ¡ID Empresa no valido! -->
<?php if (isset($_SESSION["error_id_business_invalid"])): ?>
    <div class="alert alert-<?= $_SESSION["error_id_business_invalid"]["estilo"]?> bg-<?= $_SESSION["error_id_business_invalid"]["estilo"]?> text-light border-0 alert-dismissible fade show" role="alert">
        <i class="bi bi-<?= $_SESSION["error_id_business_invalid"]["icono"] ?>"></i>
        <strong>Error</strong> el ID de Empresa no es valido.
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php unset($_SESSION["error_id_business_invalid"]) ?>
<?php endif ?>
<!-- Mensaje flash ¡ID Empresa no valido! -->

<!-- Mensaje flash ¡Teléfono no valido! -->
<?php if (isset($_SESSION["error_phone_invalid"])): ?>
    <div class="alert alert-<?= $_SESSION["error_phone_invalid"]["estilo"]?> bg-<?= $_SESSION["error_phone_invalid"]["estilo"]?> text-light border-0 alert-dismissible fade show" role="alert">
        <i class="bi bi-<?= $_SESSION["error_phone_invalid"]["icono"] ?>"></i>
        <strong>Error</strong> el teléfono no es valido.
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php unset($_SESSION["error_phone_invalid"]) ?>
<?php endif ?>
<!-- Mensaje flash ¡Teléfono no valido! -->

<!-- Mensaje flash ¡E-Mail o Contraseña incorrectos! -->
<?php if (isset($_SESSION["error_password_email_incorrect"])): ?>
    <div class="alert alert-<?= $_SESSION["error_password_email_incorrect"]["estilo"]?> bg-<?= $_SESSION["error_password_email_incorrect"]["estilo"]?> text-light border-0 alert-dismissible fade show" role="alert">
        <i class="bi bi-<?= $_SESSION["error_password_email_incorrect"]["icono"] ?>"></i>
        <strong>Error</strong> E-Mail o Contraseña incorrectos.
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php unset($_SESSION["error_password_email_incorrect"]) ?>
<?php endif ?>
<!-- Mensaje flash ¡E-Mail o Contraseña incorrectos! -->

<!-- Mensaje flash ¡E-Mail Enviado! -->
<?php if (isset($_SESSION["email_send"])): ?>
    <div class="alert alert-<?= $_SESSION["email_send"]["estilo"]?> bg-<?= $_SESSION["email_send"]["estilo"]?> text-light border-0 alert-dismissible fade show" role="alert">
        <i class="bi bi-<?= $_SESSION["email_send"]["icono"] ?>"></i>
        <strong>Email Enviado</strong>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php unset($_SESSION["email_send"]) ?>
<?php endif ?>
<!-- Mensaje flash ¡E-Mail Enviado! -->
