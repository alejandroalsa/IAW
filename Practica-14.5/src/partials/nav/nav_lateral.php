<aside id="sidebar" class="sidebar">
  <ul class="sidebar-nav" id="sidebar-nav">
    <li class="nav-heading">Panel</li>
    <li class="nav-item">
      <a class="nav-link collapsed" href="/sections/common/home.php">
        <i class="bi bi-grid-1x2-fill"></i>
        <span>Inicio</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" href="/sections/common/journeys.php">
        <i class="bi bi-calendar-week-fill"></i>
        <span>Jornadas</span>
      </a>
    </li>  
  
<!-- Realizamos la comprobación en el caso de que tenga algo diferente a Administrador no mostrara el contenido -->
    <?php if ( $user_admin['user_rol'] === "Administrador" ): ?>
      <li class="nav-heading">Administración</li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="/sections/admin/users-journeys.php">
          <i class="bi bi-clipboard2-check-fill"></i>
          <span>Jornadas</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="/sections/admin/users.php">
          <i class="bi bi-people-fill"></i>
          <span>Empleados</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="/sections/admin/post.php">
          <i class="bi bi-envelope-fill"></i>
          <span>Enviar Mensajes</span>
        </a>
      </li>
    <?php endif ?>

    <li class="nav-heading">Usuario</li>
    <li class="nav-item">
      <a class="nav-link collapsed" href="/sections/common/account.php">
        <i class="bi bi-person-fill"></i>
        <span>Cuenta</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" href="/actions/logout.php">
        <i class="bi bi-door-open-fill"></i>
        <span>Cerrar Sesión</span>
      </a>
    </li>
    <li class="nav-heading">APP</li>
    <li class="nav-item">
      <a class="nav-link collapsed" href="/sections/common/questions.php">
        <i class="bi bi-question-circle-fill"></i>
        <span>Preguntas</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" href="/sections/common/report-bugs.php">
        <i class="bi bi-bug-fill"></i>
        <span>Informar Errores</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" href="/sections/common/app.php">
        <i class="bi bi-hdd-rack-fill"></i>
        <span>Info APP 4.0</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" href="/sections/common/privacy_policy.php">
        <i class="bi bi-file-lock-fill"></i>
        <span>Política de Privacidad</span>
      </a>
    </li>
  </ul>
</aside>
