<?php $title = 'Ver Autos';
include_once 'includes/head.php' ?>
<?php include_once 'includes/navbar.php' ?>
<?php include_once "../configuracion.php" ?>

<?php
$objAbmAuto = new AbmAuto();
$data['dniduenio'] = $_GET['dniDuenio'];
$listaAutos = $objAbmAuto->buscar($data);

?>

<div class="container text-center mt-20vh">

  <?php if (count($listaAutos) > 0) { ?>

    <h1 class="pb-5">Autos de <?= $listaAutos[0]->getObjPersona()->getNombre() . ' ' . $listaAutos[0]->getObjPersona()->getApellido(); ?></h1>

    <table class="table">
      <thead>
        <tr>
          <th scope="col">Patente</th>
          <th scope="col">Marca</th>
          <th scope="col">Modelo</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($listaAutos as $objAuto) { ?>
          <tr>
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
        <h2>No tiene autos cargados</h2>
      </div>
    </div>
  <?php } ?>

<div class="text-center mt-5">
  <a class='btn btn-outline-primary' href="listaPersonas.php" role='button'>Ver autos de otra persona</a>
</div>
</div>



<script src="js/validation.js"></script>

<?php include_once 'includes/foot.php' ?>