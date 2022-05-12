<?php $title = 'Subir doc o pdf';
include_once 'includes/head.php' ?>
<?php include_once 'includes/navbar.php' ?>

<div class="container d-flex justify-content-center mt-20vh">

  <form class="needs-validation" enctype="multipart/form-data" method="post" action="TP3-E1-subirDocPdfAccion.php" novalidate>

    <div class="form-group">
      <label for="archivo" class="form-label">Subir un archivo de tipo <b>.doc</b> o <b>.pdf</b></label><br>
      <input type="file" name="archivo" class="form-control" accept="application/pdf, .doc" id="archivo" required>
    </div>

    <div class="container d-flex justify-content-center">
      <button type="submit" class="btn btn-primary m-4">Subir</button>
    </div>

  </form>
</div>

<script src="js/validation.js"></script>

<?php include_once 'includes/foot.php' ?>