<?php $title = 'Saludo Deporte';
include_once 'includes/head.php' ?>
<?php include_once 'includes/navbar.php' ?>


<div class="container d-flex justify-content-center">
  <form id="formulario" class="needs-validation p-5" action="TP1-E6-saludoDeporteAccion.php" novalidate>

    <div class="form-group mb-3">
      <label for="nombre">Nombre</label>
      <input type="text" name="nombre" class="form-control" id="nombre" required>
      <div class="invalid-feedback">
        Ingrese un nombre
      </div>
      <div class="valid-feedback">
        Exito
      </div>
    </div>

    <div class="form-group mb-3">
      <label for="apellido">Apellido</label>
      <input type="text" name="apellido" class="form-control" id="apellido" required>
      <div class="invalid-feedback">
        Ingrese un apellido
      </div>
    </div>

    <div class="form-group mb-3">
      <label for="mail">Mail</label>
      <input type="email" name="mail" class="form-control" id="email" required>
      <div class="invalid-feedback">
        Ingrese un mail
      </div>
    </div>

    <div class="form-group mb-3">
      <label for="edad">Edad</label>
      <input type="number" name="edad" class="form-control" id="edad" min="0" max="130" required>
      <div class="invalid-feedback">
        Ingrese una edad
      </div>
    </div>

    <div class="form-group mb-3">
      <label for="direccion">Direccion</label>
      <input type="text" name="direccion" class="form-control" id="direccion">
      <div class="invalid-feedback">
        Ingrese una direccion
      </div>
    </div>

    <div class="form-group mb-3">
      <label>Nivel de estudios</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="estudio" id="estudio1" value="No tiene estudios" checked>
        <label for="estudio1">
          No tiene estudios
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="estudio" id="estudio2" value="Estudios primarios">
        <label for="estudio2">
          Estudios primarios
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="estudio" id="estudio3" value="Estudios secundarios">
        <label for="estudio3">
          Estudios secundarios
        </label>
      </div>
    </div>

    <div class="form-group mb-3">
      <label for="sexo">Sexo</label>
      <input type="text" class="form-control" name="sexo" id="sexo">
    </div>

    
    <label class="mb-2">Deporte:</label>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="futbol" name="deporte[futbol]" id="futbol">
      <label class="form-check-label" for="futbol">
        Futbol
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="basket" name="deporte[basket]" id="basket">
      <label class="form-check-label" for="basket">
        Basket
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="tennis" name="deporte[tennis]" id="tennis">
      <label class="form-check-label" for="tennis">
        Tennis
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="voley" name="deporte[voley]" id="voley">
      <label class="form-check-label" for="voley">
        Voley
      </label>
    </div>


    <div class="text-center">
      <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </div>

  </form>
</div>

<script src="js/validation.js"></script>

<?php include_once 'includes/foot.php' ?>