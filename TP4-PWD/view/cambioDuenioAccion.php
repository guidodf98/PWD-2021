<?php $title = 'Nueva Persona Accion';
include_once 'includes/head.php' ?>
<?php include_once 'includes/navbar.php' ?>
<?php include_once "../configuracion.php" ?>

<?php include_once '../controller/CambioDuenioControl.php' ?>

<?php
$control = new CambioDuenioControl();
$resp = $control->cambiarDuenio();

?>

<div class="container d-flex justify-content-center align-items-start text-center mt-20vh">

  <?php if ($resp['exito']) { ?>
    <div class="alert alert-success d-flex align-items-center p-4" role="alert">
      <div>
        <h2><?= $resp['mensaje']; ?></h2>
      </div>
    </div>
</div>

<?php } else { ?>
  <div class="alert alert-danger d-flex align-items-center p-4" role="alert">
    <div>
      <h2><?= $resp['mensaje']; ?></h2>
    </div>
  </div>
  </div>
  <?php if (!$resp['existePersona']) { ?>
    <div class="text-center mt-5">
      <a class='btn btn-outline-primary' href="nuevaPersona.php" role='button'>Registrar una persona</a>
    </div>
  <?php } ?>

<?php } ?>


<div class="text-center mt-5">
  <a class='btn btn-outline-primary' href="cambioDuenio.php" role='button'>Cambiar otro dueño</a>
</div>



<script src="js/validation.js"></script>

<?php include_once 'includes/foot.php' ?>