<?php $title = 'Ver Autos';
include_once 'includes/head.php' ?>
<?php include_once 'includes/navbar.php' ?>
<?php include_once "../configuracion.php" ?>

<?php
$objAbmAuto = new AbmAuto();
$listaAuto = $objAbmAuto->buscar(null);

?>

<div class="container d-flex justify-content-center align-items-start text-center mt-20vh">

  <?php if (count($listaAuto) > 0) { ?>
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
        <?php foreach ($listaAuto as $objAuto) { ?>
          <tr>
            <td><?= ($objAuto->getObjPersona()->getNombre()); ?></td>
            <td><?= ($objAuto->getObjPersona()->getApellido()); ?></td>
            <td><?= ($objAuto->getPatente()); ?></td>
            <td><?= ($objAuto->getMarca()); ?></td>
            <td><?= ($objAuto->getModelo()); ?></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  <?php } else { ?>
    <div class="alert alert-danger d-flex align-items-center p-4" role="alert">
      <div>
        <h2>No hay autos cargados en el sistema</h2>
      </div>
    </div>
  <?php } ?>


</div>



<script src="js/validation.js"></script>

<?php include_once 'includes/foot.php' ?>