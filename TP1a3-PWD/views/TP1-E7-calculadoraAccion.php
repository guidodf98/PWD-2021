<?php $title = 'Calculadora Accion';
include_once 'includes/head.php' ?>
<?php include_once 'includes/navbar.php' ?>
<?php include_once '../control/CalculadoraControl.php' ?>

<?php
$control = new CalculadoraControl();
$resultado = $control->saludar();
?>

<div class="container mt-20vh">

  <?php echo "<h2 class='text-center'>{$resultado}</h2>"; ?>

  <div class="text-center mt-5">
    <a class='btn btn-outline-primary' href="../views/TP1-E7-calculadora.php" role='button'>Cargar otros datos</a>
  </div>

</div>


<?php include_once 'includes/foot.php'  ?>