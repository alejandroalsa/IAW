<header id="header" class="header fixed-top d-flex align-items-center">

  <div class="d-flex align-items-center justify-content-between">
    <a href="index.html" class="logo d-flex align-items-center">
      <img src="/assets/img/logo.png" alt="">
      <span class="d-none d-lg-block">Time Control</span>
    </a>
    <i class="bi bi-list toggle-sidebar-btn"></i>
  </div>

  <nav class="header-nav ms-auto">
    <ul class="d-flex align-items-center">

      <li class="nav-item dropdown pe-3">

        <a class="nav-link nav-Perfil d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
          <img src="/assets/img/profile-img.jpg" alt="Perfil" class="rounded-circle">
          <?php if (isset($_SESSION["user"])): ?>
            <span class="d-none d-md-block dropdown-toggle ps-2"><?= $_SESSION["user"]["user_name"] ?></span>
          <?php endif ?>
        </a><!-- End Perfil Iamge Icon -->

        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow Perfil">
          <li class="dropdown-header">
          <?php if (isset($_SESSION["user"])): ?>
            <h6><?= $_SESSION["user"]["user_rol"] ?></h6>
          <?php endif ?>
            
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li>
            <a class="dropdown-item d-flex align-items-center" href="/sections/common/account.php">
              <i class="bi bi-person"></i>
              <span>Cuenta</span>
            </a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li>
            <a class="dropdown-item d-flex align-items-center" href="/sections/common/account.php">
              <i class="bi bi-gear"></i>
              <span>Configuración</span>
            </a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li>
            <a class="dropdown-item d-flex align-items-center" href="/actions/logout.php">
              <i class="bi bi-box-arrow-right"></i>
              <span>Cerrar Sesión</span>
            </a>
          </li>

        </ul>
      </li>
    </ul>
  </nav>

</header>
