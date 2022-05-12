<?php $title = 'Subir doc o pdf Accion';
include_once 'includes/head.php' ?>
<?php include_once 'includes/navbar.php' ?>

<?php include_once '../control/SubirDocPdfControl.php' ?>

<?php

$control = new SubirDocPdfControl();
$resultado = $control->subirArchivo();

?>


<div class="container" style="margin-top:20vh">

  <div class="row">
    <div class="col">
      <h2 class="text-center">
        <?php
        if ($resultado['error'] != '') {
          echo "{$resultado['error']}";
        } else {
          echo "Archivo subido con exito";
        }
        ?>
      </h2>
    </div>
  </div>

  <div class="row mt-5 ">
    <div class="col-4"></div>
    <?php
    if ($resultado['error'] == '') {
      echo "<div class='col text-center'>";
      echo "  <a class='btn btn-primary' href={$resultado['link']} target='_blank'role='button'>Ver archivo</a>";
      echo "</div>";
    }

    ?>
    <div class="col text-center">
      <a class='btn btn-outline-primary' href="../views/TP3-E1-subirDocPdf.php" role='button'>Subir otro archivo</a>
    </div>
    <div class="col-4"></div>

  </div>

</div>

<?php include_once 'includes/foot.php' ?>