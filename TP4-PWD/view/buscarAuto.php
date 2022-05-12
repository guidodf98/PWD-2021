<?php $title = 'Buscar Auto';
include_once 'includes/head.php' ?>
<?php include_once 'includes/navbar.php' ?>
<?php include_once "../configuracion.php" ?>


<div class="container d-flex justify-content-center align-items-start text-center mt-20vh">
  <form id="formulario" class="needs-validation p-5" action="buscarAutoAccion.php" novalidate>

    <div class="form-group mb-3">
      <label for="patente">Patente</label>
      <input type="text" name="patente" class="form-control" id="patente" pattern="^[a-zA-Z]{3}\s\d{3}$" required>
      <div class="invalid-feedback">
        Formato invalido
      </div>
      <small class="text-black-50">Formato: AAA 000</small>
    </div>


    <div class="text-center">
      <button type="submit" class="btn btn-primary">Buscar</button>
    </div>

  </form>
</div>



<script src="js/validation.js"></script>

<?php include_once 'includes/foot.php' ?>