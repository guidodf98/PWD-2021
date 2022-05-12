<?php $title = 'Subir txt';
include_once 'includes/head.php' ?>
<?php include_once 'includes/navbar.php' ?>

<div class="container d-flex justify-content-center mt-20vh">
  
  <form class="needs-validation" enctype="multipart/form-data" method="post" action="TP3-E2-subirTxtAccion.php" novalidate>

    <div class="form-group">
      <label for="archivo" class="form-label">Subir un archivo de tipo <b>.txt</b></label><br>
      <input type="file" name="archivo" class="form-control" id="archivo" accept="text/plain" required>
    </div>

    <div class="container d-flex justify-content-center">
      <button type="submit" class="btn btn-primary m-4">Subir</button>
    </div>

  </form>
</div>

<script src="js/validation.js"></script>

<?php include_once 'includes/foot.php' ?>