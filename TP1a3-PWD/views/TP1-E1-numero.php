<?php $title = 'Numero';
include_once 'includes/head.php' ?>
<?php include_once 'includes/navbar.php' ?>


<div class="container d-flex justify-content-center mt-20vh">
  <form id="formulario" class="needs-validation" action="TP1-E1-numeroAccion.php" method="get" novalidate>

    <div class="form-group mb-4">
      <label class="mb-2" for="numero">Ingrese un numero</label>
      <input type="number" name="numero" class="form-control" id="numero" required>
      <div class="invalid-feedback">
        Compeltar este campo con un numero valido
      </div>
    </div>

    <div class="text-center mt-5">
      <button type="submit" class="btn btn-primary">Enviar</button>
    </div>

  </form>
</div>

<script src="js/validation.js"></script>

<?php include_once 'includes/foot.php' ?>