<?php $title = 'Calculadora';
include_once 'includes/head.php' ?>
<?php include_once 'includes/navbar.php' ?>


<div class="container d-flex justify-content-center">
  <form id="formulario" class="needs-validation p-5" action="TP1-E7-calculadoraAccion.php" novalidate>

    <div class="form-group mb-3">
      <label for="num-1">Primer número</label>
      <input type="number" name="num-1" class="form-control" id="num-1" required>
    </div>

    <div class="form-group mb-3">
      <label for="num-2">Segundo número</label>
      <input type="number" name="num-2" class="form-control" id="num-2" required>
    </div>


    <div class="col-md">
      <label for="operacion">Operación</label>
      <select class="form-select" name="operacion" id="name" required>
        <option selected disabled value="">&nbsp;</option>
        <option value="suma">Suma</option>
        <option value="resta">Resta</option>
        <option value="multiplicacion">Multiplicacion</option>
        <option value="division">Division</option>
        <option value="potencia">Potencia</option>
        <option value="resto">Resto</option>
      </select>
    </div>


    <div class="text-center">
      <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </div>

  </form>
</div>

<script src="js/validation.js"></script>

<?php include_once 'includes/foot.php' ?>