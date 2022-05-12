<?php $title = 'Login Accion';
include_once 'includes/head.php' ?>
<?php include_once 'includes/navbar.php' ?>
<?php include_once '../control/VerificarPass.php' ?>

<?php
$control = new VerificarPass();
$cuentaValida = $control->verificar();

?>

<div class="container mt-20vh">
  <h2 class='text-center'>
    <?php
    if ($cuentaValida) {
      echo "Bienvenido a nuestro sitio";
    } else {
      echo "Los datos ingresados no son correctos";
    }
    ?>
  </h2>
  <div class="text-center mt-5">
    <a class='btn btn-outline-primary' href="../views/TP2-E3-login.php" role='button'>Iniciar sesión con otra cuenta</a>
  </div>

</div>


<?php include_once 'includes/foot.php' ?>