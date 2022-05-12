<?php $title = 'Numero Accion';
include_once 'includes/head.php' ?>
<?php include_once 'includes/navbar.php' ?>
<?php include_once '../control/VerNumero.php' ?>

<?php
$control = new VerNumero();
$numeroEs = $control->checkear();

?>

<div class="container mt-20vh">
  <h2 class="text-center">
    <?php echo $numeroEs; ?>
  </h2>

  <div class="text-center mt-5">
    <a class='btn btn-outline-primary' href="../views/TP1-E1-numero.php" role='button'>Probar con otro numero</a>
  </div>
</div>


<?php include_once 'includes/foot.php' ?>