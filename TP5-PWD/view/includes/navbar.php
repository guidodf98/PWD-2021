<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?= $INICIO ?>">
      <img src="img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="logo">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
      
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" href="listarUsuario.php">Lista de Usuarios</a>
        </li>
      </ul>

      <?php if (isset($_SESSION['activa'])) { ?>
        <a class="btn btn-danger" href="loginCerrar.php" role="button">Cerrar sesion</a>
      <?php } else { ?>
        <a class="btn btn-primary" href="login.php" role="button">Iniciar sesión</a>
      <?php } ?>

    </div>
  </div>
</nav>