<?php $title = 'Saludo Accion';
include_once 'includes/head.php' ?>
<?php include_once 'includes/navbar.php' ?>
<?php include_once '../control/SaludoControl.php' ?>

<?php
$control = new SaludoControl();
$saludo = $control->saludar();

?>

<div class="container mt-20vh">

  <?php echo "<h2 class='text-center'>{$saludo}</h2>"; ?>

  <div class="text-center mt-5">
    <a class='btn btn-outline-primary' href="../views/TP1-E3-saludo.php" role='button'>Cargar otros datos</a>
  </div>

</div>


<?php include_once 'includes/foot.php'  ?>