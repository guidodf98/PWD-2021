<?php include_once "../configuracion.php" ?>

<?php $title = 'Certificado Alumno';
include_once 'includes/head.php' ?>
<?php include_once 'includes/navbar.php' ?>

<?php

$control = new ValidarCertificadoControl();
$error = $control->validar();
?>

<?php if (!$error) { ?>

  <div class="container d-flex justify-content-center align-items-start text-center mt-5">
    <div class="alert alert-success" role="alert">
      <h1>El certificado del usuario es valido</h1>
    </div>
  </div>

<?php } else { ?>
  <div class="container d-flex justify-content-center align-items-start text-center mt-5">
    <div class="alert alert-danger" role="alert">
      <h4 class="alert-heading"><?= $error; ?></h4>
    </div>
  </div>
<?php } ?>


<script src="js/validation.js"></script>

<?php include_once 'includes/foot.php' ?>