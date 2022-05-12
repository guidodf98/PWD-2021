<?php $title = 'Ver Autos';
include_once 'includes/head.php' ?>
<?php include_once 'includes/navbar.php' ?>
<?php include_once "../configuracion.php" ?>

<?php
$objAbmPersona = new AbmPersona();
$listaPersonas = $objAbmPersona->buscar(null);

?>

<div class="container d-flex justify-content-center align-items-start text-center mt-20vh">

  <?php if (count($listaPersonas) > 0) { ?>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Número DNI</th>
          <th scope="col">Apellido</th>
          <th scope="col">Nombre</th>
          <th scope="col">Fecha de nacimiento</th>
          <th scope="col">Teléfono</th>
          <th scope="col">Domicilio</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($listaPersonas as $objPersona) { ?>
          <tr>
            <td><?= ($objPersona->getNroDni()); ?></td>
            <td><?= ($objPersona->getApellido()); ?></td>
            <td><?= ($objPersona->getNombre()); ?></td>
            <td><?= ($objPersona->getFechaNac()); ?></td>
            <td><?= ($objPersona->getTelefono()); ?></td>
            <td><?= ($objPersona->getDomicilio()); ?></td>
            <td><a href="autosPersona.php?dniDuenio=<?= $objPersona->getNroDni()?>">Ver Autos</a></td>
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