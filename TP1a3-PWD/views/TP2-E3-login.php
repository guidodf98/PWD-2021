<?php $title = 'Login';
include_once 'includes/head.php' ?>
<?php include_once 'includes/navbar.php' ?>

<div class="container mt-5 pt-5">

  <div class="text-center mx-auto" style="max-width:300px">

    <img class="mb-4" src="img\logo.png" alt="logo" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Iniciar sesión</h1>

    <form class="needs-validation" data-toggle="validator" id="form-login" novalidate action="TP2-E3-loginAccion.php" method="post">
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-user p-1"></i></span>
          </div>
          <input type="username" name="username" id="username" placeholder="Username" class="form-control" required>
        </div>
      </div>

      <div class="form-group">
        <div class="input-group mt-3">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-lock p-1"></i></span>
          </div>
          <input type="password" name="password" id="password" pattern="(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]" placeholder="Password" class="form-control" required>
        </div>
      </div>


      <button class="btn btn-primary btn-block mt-4" type="submit">Iniciar sesión</button>
    </form>
  </div>
</div>


<script src="js/validation.js"></script>

<?php include_once 'includes/foot.php' ?>