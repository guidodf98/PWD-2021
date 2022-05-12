<?php $title = 'Calculo Cine Accion';
include_once 'includes/head.php' ?>
<?php include_once 'includes/navbar.php' ?>
<?php include_once '../control/CalculoCineControl.php' ?>

<?php
$control = new CalculoCineControl();
$precio = $control->calcular();

?>

<div class="container mt-20vh">

  <?php
  echo "<h2 class='text-center'>El costo de la entrada es de: $" . $precio . "</h2>";
  ?>

  <div class="text-center mt-5">
    <a class='btn btn-outline-primary' href="../views/TP1-E8-calculoCine.php" role='button'>Cargar otros datos</a>
  </div>

</div>


<?php include_once 'includes/foot.php'  ?>