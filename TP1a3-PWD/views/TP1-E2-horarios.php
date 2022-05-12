<?php $title = 'Horarios';
include_once 'includes/head.php' ?>
<?php include_once 'includes/navbar.php' ?>


<div class="container d-flex justify-content-center mt-20vh">
  <form id="formulario" class="needs-validation" action="TP1-E2-horariosAccion.php" method="get" novalidate>

    <div class="form-group row mb-4">
      <label for="horario-lunes" class="col-sm-6 col-form-label">Lunes</label>
      <div class="col-sm-6">
        <input type="number" class="form-control" min="0" max="12" name="horario-lunes" id="horario-lunes" required>
        <div class="invalid-feedback">
          Colocar 0 si no se cursa
        </div>
      </div>
    </div>

    <div class="form-group row mb-4">
      <label for="horario-martes" class="col-sm-6 col-form-label">Martes</label>
      <div class="col-sm-6">
        <input type="number" class="form-control" min="0" max="12" name="horario-martes" id="horario-martes" required>
        <div class="invalid-feedback">
          Colocar 0 si no se cursa
        </div>
      </div>
    </div>

    <div class="form-group row mb-4">
      <label for="horario-miercoles" class="col-sm-6 col-form-label">Miércoles</label>
      <div class="col-sm-6">
        <input type="number" class="form-control" min="0" max="12" name="horario-miercoles" id="horario-miercoles" required>
        <div class="invalid-feedback">
          Colocar 0 si no se cursa
        </div>
      </div>
    </div>

    <div class="form-group row mb-4">
      <label for="horario-jueves" class="col-sm-6 col-form-label">Jueves</label>
      <div class="col-sm-6">
        <input type="number" class="form-control" min="0" max="12" name="horario-jueves" id="horario-jueves" required>
        <div class="invalid-feedback">
          Colocar 0 si no se cursa
        </div>
      </div>
    </div>

    <div class="form-group row mb-4">
      <label for="horario-viernes" class="col-sm-6 col-form-label">Viernes</label>
      <div class="col-sm-6">
        <input type="number" class="form-control" min="0" max="12" name="horario-viernes" id="horario-viernes" required>
        <div class="invalid-feedback">
          Colocar 0 si no se cursa
        </div>
      </div>
    </div>

    <div class="form-group row mb-4">
      <label for="horario-sabado" class="col-sm-6 col-form-label">Sábado</label>
      <div class="col-sm-6">
        <input type="number" class="form-control" min="0" max="12" name="horario-sabado" id="horario-sabado" required>
        <div class="invalid-feedback">
          Colocar 0 si no se cursa
        </div>
      </div>
    </div>

    <div class="form-group row mb-4">
      <label for="horario-domingo" class="col-sm-6 col-form-label">Domingo</label>
      <div class="col-sm-6">
        <input type="number" class="form-control" min="0" max="12" name="horario-domingo" id="horario-domingo" required>
        <div class="invalid-feedback">
          Colocar 0 si no se cursa
        </div>
      </div>
    </div>



    <div class="text-center mt-5">
      <button type="submit" class="btn btn-primary">Enviar</button>
    </div>

  </form>
</div>

<script src="js/validation.js"></script>

<?php include_once 'includes/foot.php' ?>