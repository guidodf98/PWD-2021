<?php $title = 'Nueva Persona Accion';
include_once 'includes/head.php' ?>
<?php include_once 'includes/navbar.php' ?>
<?php include_once "../configuracion.php" ?>

<?php include_once '../controller/ActualizarDatosParsonaControl.php' ?>

<?php
$control = new ActualizarDatosParsonaControl();
$ingresado = $control->actualizar();

?>

<div class="container d-flex justify-content-center align-items-start text-center mt-5">
  <?php if ($ingresado) { ?>

    <div class="alert alert-success d-flex align-items-center mt-20vh" role="alert">
      <div>
        <h2>Los datos de la persona se actualizaron</h2>
      </div>
    </div>

  <?php } else { ?>

    <div class="alert alert-danger d-flex align-items-center mt-20vh" role="alert">
      <div>
        <h2>No se pudieron actualizar los datos</h2>
      </div>
    </div>

  <?php } ?>
</div>



<div class="text-center mt-4">
  <a class='btn btn-outline-primary' href="buscarPersona.php" role='button'>Buscar otra persona</a>
</div>



<script src="js/validation.js"></script>

<?php include_once 'includes/foot.php' ?>