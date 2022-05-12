<?php $title = 'Nueva Persona';
include_once 'includes/head.php' ?>
<?php include_once 'includes/navbar.php' ?>
<?php include_once "../configuracion.php" ?>


<div class="container d-flex justify-content-center align-items-start text-center mt-20vh">
  <form id="formulario" class="needs-validation p-5" action="nuevaPersonaAccion.php" novalidate>

    <div class="form-group mb-3">
      <label for="nrodni">Número de DNI</label>
      <input type="text" name="nrodni" class="form-control" id="nrodni" required>
      <div class="invalid-feedback">
        Formato invalido
      </div>
    </div>

    <div class="form-group mb-3">
      <label for="apellido">Apellido</label>
      <input type="text" name="apellido" class="form-control" id="apellido" required>
      <div class="invalid-feedback">
        Formato invalido
      </div>
    </div>

    <div class="form-group mb-3">
      <label for="nombre">Nombre</label>
      <input type="text" name="nombre" class="form-control" id="nombre" required>
      <div class="invalid-feedback">
        Formato invalido
      </div>
    </div>

    <div class="form-group mb-3">
      <label for="fechanac">Fecha de nacimiento</label>
      <input type="text" name="fechanac" class="form-control" id="fechanac" required>
      <div class="invalid-feedback">
        Formato invalido
      </div>
    </div>

    <div class="form-group mb-3">
      <label for="telefono">Teléfono</label>
      <input type="text" name="telefono" class="form-control" id="telefono" required>
      <div class="invalid-feedback">
        Formato invalido
      </div>
    </div>

    <div class="form-group mb-3">
      <label for="domicilio">Domicilio</label>
      <input type="text" name="domicilio" class="form-control" id="domicilio" required>
      <div class="invalid-feedback">
        Formato invalido
      </div>
    </div>


    <div class="text-center">
      <button type="submit" class="btn btn-primary">Registrar</button>
    </div>

  </form>
</div>



<script src="js/validation.js"></script>

<?php include_once 'includes/foot.php' ?>