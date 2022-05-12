<?php $title = 'Subir txt Accion';
include_once 'includes/head.php' ?>
<?php include_once 'includes/navbar.php' ?>
<?php include_once '../control/SubirTxtControl.php' ?>

<?php
$control = new SubirTxtControl();
$resultado = $control->subirArchivo();

?>

<div class="container mt-20vh">

  <textarea cols="150" rows="15" class="form-control" style="resize: none;">
    <?php
    foreach ($resultado['content'] as $line) {
      echo $line;
    }
    ?>
  </textarea>
  <div class="col text-center mt-5">
    <a class='btn btn-outline-primary' href="../views/TP3-E2-subirTxt.php" role='button'>Subir otro archivo</a>
  </div>

</div>

<?php include_once 'includes/foot.php' ?>