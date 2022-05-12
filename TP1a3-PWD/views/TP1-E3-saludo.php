<?php $title = 'Saludo';
include_once 'includes/head.php' ?>
<?php include_once 'includes/navbar.php' ?>


<div class="container d-flex justify-content-center mt-20vh">
  <form id="formulario" class="needs-validation" action="TP1-E3-saludoAccion.php" method="get" novalidate>


    <div class="row g-3 align-items-center mb-4">
      <div class="col-auto">
        <label for="nombre" class="col-form-label">Nombre</label>
      </div>
      <div class="col-auto">
        <input type="text" id="nombre" name="nombre" class="form-control" required>
      </div>
    </div>

    <div class="row g-3 align-items-center mb-4">
      <div class="col-auto">
        <label for="apellido" class="col-form-label">Apellido</label>
      </div>
      <div class="col-auto">
        <input type="text" id="apellido" name="apellido" class="form-control" required>
      </div>
    </div>

    <div class="row g-3 align-items-center mb-4">
      <div class="col-auto">
        <label for="edad" class="col-form-label">Edad</label>
      </div>
      <div class="col-auto">
        <input type="number" min="0" max="150" id="edad" name="edad" class="form-control" required>
      </div>
    </div>

    <div class="row g-3 align-items-center mb-4">
      <div class="col-auto">
        <label for="direccion" class="col-form-label">Direccion</label>
      </div>
      <div class="col-auto">
        <input type="text" id="direccion" name="direccion" class="form-control" required>
      </div>
    </div>


    <div class="text-center mt-5">
      <button type="submit" class="btn btn-primary">Enviar</button>
    </div>

  </form>
</div>

<script src="js/validation.js"></script>

<?php include_once 'includes/foot.php' ?>