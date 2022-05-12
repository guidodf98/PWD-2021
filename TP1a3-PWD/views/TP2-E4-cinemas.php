<?php $title = 'Cine';
include_once 'includes/head.php' ?>
<?php include_once 'includes/navbar.php' ?>

<div class="container d-flex justify-content-center border rounded-2 my-4">

  <form id="formulario" class="needs-validation w-100 p-4" action="TP2-E4-cinemasAccion.php" method="post" novalidate>

    <h1 class="pb-3 text-primary">Cinem@s</h1>

    <div class="row g-4">
      <div class="col-md">
        <div class="form-floating mb-3">
          <input type="text" name="titulo" class="form-control" id="titulo" placeholder="Titulo" required>
          <label for="titulo">Titulo</label>
          <div class="invalid-feedback">Este campo es obligatorio</div>
        </div>

      </div>
      <div class="col-md">
        <div class="form-floating mb-3">
          <input type="text" name="actores" class="form-control" id="actores" placeholder="Actores" required>
          <label for="actores">Actores</label>
          <div class="invalid-feedback">Este campo es obligatorio</div>
        </div>
      </div>
    </div>

    <div class="row g-4">
      <div class="col-md">

        <div class="form-floating mb-3">
          <input type="text" name="director" class="form-control" id="director" placeholder="Director" required>
          <label for="director">Director</label>
          <div class="invalid-feedback">Este campo es obligatorio</div>
        </div>
      </div>
      <div class="col-md">

        <div class="form-floating mb-3">
          <input type="text" name="guion" class="form-control" id="guion" placeholder="Guión" required>
          <label for="guion">Guión</label>
          <div class="invalid-feedback">Este campo es obligatorio</div>
        </div>
      </div>
    </div>

    <div class="row g-4">
      <div class="col-md">
        <div class="form-floating mb-3">
          <input type="text" name="producion" class="form-control" id="producion" placeholder="Produción" required>
          <label for="producion">Produción</label>
          <div class="invalid-feedback">Este campo es obligatorio</div>
        </div>

      </div>
      <div class="col-md">
        <div class="form-floating mb-3">
          <input type="number" name="anio" class="form-control" id="anio" min="0000" max="9999" placeholder="Año" required>
          <label for="anio">Año</label>
          <div class="invalid-feedback">Este campo es obligatorio</div>
        </div>

      </div>
    </div>

    <div class="row g-4">

      <div class="col-md">
        <div class="form-floating mb-3">
          <input type="text" name="nacionalidad" class="form-control" id="nacionalidad" placeholder="Nacionalidad" required>
          <label for="nacionalidad">Nacionalidad</label>
          <div class="invalid-feedback">Este campo es obligatorio</div>
        </div>
      </div>

      <div class="col-md">
        <div class="form-floating mb-3">
          <select class="form-select" name="genero" id="genero"required>
            <option selected disabled value="">&nbsp;</option>
            <option value="comedia">Comedia</option>
            <option value="drama">Drama</option>
            <option value="terror">Terror</option>
            <option value="romantica">Romantica</option>
            <option value="suspenso">Suspenso</option>
            <option value="otra">Otra</option>
          </select>
          <label for="genero">Género</label>
        </div>
      </div>
      
    </div>


    <div class="row g-4">
      <div class="col-md">
        <div class="form-floating mb-3">
          <input type="number" name="duracion" class="form-control" min="1" max="999" id="duracion" placeholder="Duración" required>
          <label for="duracion">Duración</label>
          <small id="emailHelp" class="form-text text-muted m-2">(minutos)</small>

          <div class="invalid-feedback">Este campo es obligatorio</div>
        </div>
      </div>
      <div class="col-md">
        <div class="form-group mb-3">
          <label>Restricciones de edad</label><br>

          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="res-edad" id="res-edad-1" value="Todos los publicos" required>
            <label for="res-edad-1">Todos los públicos</label>
          </div>

          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="res-edad" id="res-edad-2" value="Mayores de 7 años">
            <label for="res-edad-2">Mayores de 7 años</label>
          </div>

          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="res-edad" id="res-edad-3" value="Mayores de 18 años">
            <label for="res-edad-3">Mayores de 18 años</label>
          </div>

        </div>
      </div>
    </div>

    <div class="form-floating mb-3">
      <textarea class="form-control" name="sinopsis" placeholder="Sinopsis" id="sinopsis" style="height: 200px; resize: none;" required></textarea>
      <label for="sinopsis">Sinopsis</label>
      <div class="invalid-feedback">Este campo es obligatorio</div>
    </div>

    <div class="container d-flex justify-content-end">
      <button type="submit" class="btn btn-primary m-2">Enviar</button>
      <button type="reset" class="btn btn-danger m-2">Borrar</button>
    </div>
  </form>
</div>

<script src="js/validation.js"></script>

<?php include_once 'includes/foot.php' ?>