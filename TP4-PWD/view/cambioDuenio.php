<?php $title = 'Nueva Persona';
include_once 'includes/head.php' ?>
<?php include_once 'includes/navbar.php' ?>
<?php include_once "../configuracion.php" ?>


<div class="container d-flex justify-content-center align-items-start text-center mt-20vh">
  <form id="formulario" class="needs-validation p-5" action="cambioDuenioAccion.php" novalidate>

    <div class="form-group mb-3">
      <label for="patente">Patente</label>
      <input type="text" name="patente" class="form-control" id="patente" required>
      <div class="invalid-feedback">
        Formato invalido
      </div>
    </div>


    <div class="form-group mb-3">
      <label for="nrodni">DNI de la persona</label>
      <input type="text" name="nrodni" class="form-control" id="nrodni" required>
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