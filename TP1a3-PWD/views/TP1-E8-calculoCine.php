<?php $title = 'Calculo Cine';
include_once 'includes/head.php' ?>
<?php include_once 'includes/navbar.php' ?>


<div class="container d-flex justify-content-center">
  <form id="formulario" class="needs-validation p-5" action="TP1-E8-calculoCineAccion.php" novalidate>

    <div class="form-group mb-3">
      <label for="edad">Edad</label>
      <input type="number" name="edad" class="form-control" id="edad" min="0" max="130" required>
      <div class="invalid-feedback">
        Ingrese una edad
      </div>
    </div>

    <div class="form-group mb-3">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="estudia" id="estudia">
        <label class="form-check-label" for="estudia1">
          Soy estudiante
        </label>
      </div>
    </div>


    <div class="text-center">
      <button type="reset" class="btn btn-danger mt-3">Borrar</button>
      <button type="submit" class="btn btn-primary mt-3">Enviar</button>
    </div>

  </form>
</div>

<script src="js/validation.js"></script>

<?php include_once 'includes/foot.php' ?>