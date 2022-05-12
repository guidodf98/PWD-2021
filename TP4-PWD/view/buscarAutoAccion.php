<?php $title = 'Buscar Auto Accion';
include_once 'includes/head.php' ?>
<?php include_once 'includes/navbar.php' ?>
<?php include_once "../configuracion.php" ?>

<?php include_once '../controller/BuscarAutoControl.php' ?>

<?php
$control = new BuscarAutoControl();
$objAuto = $control->buscar();

?>

<div class="container d-flex justify-content-center align-items-start text-center mt-20vh">

  <?php if ($objAuto) { ?>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Nombre</th>
          <th scope="col">Apellido</th>
          <th scope="col">Patente</th>
          <th scope="col">Marca</th>
          <th scope="col">Modelo</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><?= ($objAuto->getObjPersona()->getNombre()); ?></td>
          <td><?= ($objAuto->getObjPersona()->getApellido()); ?></td>
          <td><?= ($objAuto->getPatente()); ?></td>
          <td><?= ($objAuto->getMarca()); ?></td>
          <td><?= ($objAuto->getModelo()); ?></td>
        </tr>
      </tbody>
    </table>
  <?php } else { ?>
    <div class="alert alert-danger d-flex align-items-center p-4" role="alert">
      <div>
        <h2>No se encontro el auto</h2>
      </div>
    </div>
  <?php } ?>


</div>
<div class="text-center mt-5">
  <a class='btn btn-outline-primary' href="buscarAuto.php" role='button'>Buscar otro auto</a>
</div>


<script src="js/validation.js"></script>

<?php include_once 'includes/foot.php' ?>