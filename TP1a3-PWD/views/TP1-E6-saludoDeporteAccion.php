<?php $title = 'Saludo Deoirte Accion';
include_once 'includes/head.php' ?>
<?php include_once 'includes/navbar.php' ?>
<?php include_once '../control/SaludoDeporteControl.php' ?>

<?php
$control = new SaludoDeporteControl();
$saludo = $control->saludar();
?>

<div class="container mt-20vh">

  <?php echo "<h2 class='text-center'>{$saludo}</h2>"; ?>

  <div class="text-center mt-5">
    <a class='btn btn-outline-primary' href="../views/TP1-E6-saludoDeporte.php" role='button'>Cargar otros datos</a>
  </div>

</div>


<?php include_once 'includes/foot.php'  ?>