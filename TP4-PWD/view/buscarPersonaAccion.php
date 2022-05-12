<?php $title = 'Nueva Persona Accion';
include_once 'includes/head.php' ?>
<?php include_once 'includes/navbar.php' ?>
<?php include_once "../configuracion.php" ?>

<?php include_once '../controller/BuscarPersonaControl.php' ?>

<?php
$control = new BuscarPersonaControl();
$persona = $control->buscar();

?>

<div class="container d-flex justify-content-center align-items-start text-center mt-5">
  <?php if ($persona){ ?>
  <form id="formulario" class="needs-validation p-5" action="actualizarDatosPersona.php" novalidate>

    <div class="form-group mb-3">
      <label for="nrodni">Número de DNI</label>
      <input type="text" readonly value="<?= $persona->getNroDni()?>"name="nrodni" class="form-control" id="nrodni" required>
      <div class="invalid-feedback">
        Formato invalido
      </div>
    </div>

    <div class="form-group mb-3">
      <label for="apellido">Apellido</label>
      <input type="text" value="<?= $persona->getApellido()?>"name="apellido" class="form-control" id="apellido" required>
      <div class="invalid-feedback">
        Formato invalido
      </div>
    </div>

    <div class="form-group mb-3">
      <label for="nombre">Nombre</label>
      <input type="text" value="<?= $persona->getNombre()?>"name="nombre" class="form-control" id="nombre" required>
      <div class="invalid-feedback">
        Formato invalido
      </div>
    </div>

    <div class="form-group mb-3">
      <label for="fechanac">Fecha de nacimiento</label>
      <input type="text" value="<?= $persona->getFechaNac()?>"name="fechanac" class="form-control" id="fechanac" required>
      <div class="invalid-feedback">
        Formato invalido
      </div>
    </div>

    <div class="form-group mb-3">
      <label for="telefono">Teléfono</label>
      <input type="text" value="<?= $persona->getTelefono()?>"name="telefono" class="form-control" id="telefono" required>
      <div class="invalid-feedback">
        Formato invalido
      </div>
    </div>

    <div class="form-group mb-3">
      <label for="domicilio">Domicilio</label>
      <input type="text" value="<?= $persona->getDomicilio()?>"name="domicilio" class="form-control" id="domicilio" required>
      <div class="invalid-feedback">
        Formato invalido
      </div>
    </div>


    <div class="text-center">
      <button type="submit" class="btn btn-primary">Actualizar</button>
    </div>

  </form>
  <?php }else{ ?>
    <div class="alert alert-danger d-flex align-items-center mt-20vh" role="alert">
      <div>
        <h2>No se encontro la persona</h2>
      </div>
    </div>
    <?php } ?>
</div>



<div class="text-center mt-4">
  <a class='btn btn-outline-primary' href="buscarPersona.php" role='button'>Buscar otra persona</a>
</div>



<script src="js/validation.js"></script>

<?php include_once 'includes/foot.php' ?>