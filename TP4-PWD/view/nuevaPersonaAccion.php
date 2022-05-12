<?php $title = 'Nueva Persona Accion';
include_once 'includes/head.php' ?>
<?php include_once 'includes/navbar.php' ?>
<?php include_once "../configuracion.php" ?>

<?php include_once '../controller/NuevaPersonaControl.php' ?>

<?php
$control = new NuevaPersonaControl();
$exito = $control->registrar();

?>

<div class="container d-flex justify-content-center align-items-start text-center mt-20vh">

  <?php if ($exito) { ?>
    <div class="alert alert-success d-flex align-items-center p-4" role="alert">
      <div>
        <h2>Se registro la persona</h2>
      </div>
    </div>
  <?php } else { ?>
    <div class="alert alert-danger d-flex align-items-center p-4" role="alert">
      <div>
        <h2>No se pudo registrar la persona</h2>
      </div>
    </div>
  <?php } ?>
  
</div>

<div class="text-center mt-5">
  <a class='btn btn-outline-primary' href="nuevaPersona.php" role='button'>Registrar otra persona</a>
</div>


<script src="js/validation.js"></script>

<?php include_once 'includes/foot.php' ?>