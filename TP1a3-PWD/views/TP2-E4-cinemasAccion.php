<?php $title = 'Cine Accion';
include_once 'includes/head.php' ?>
<?php include_once 'includes/navbar.php' ?>
<?php include_once '../control/CinemasControl.php' ?>

<?php
$control = new CinemasControl();
$info = $control->infoPelicula();

?>

<div class="container mt-5">

  <div class="py-5 rounded-3">
    <h1 class="mb-5 text-primary">La película introducida es </h1>

    <?php echo $info; ?>
  </div>

  <div class="text-center mt-5">
    <a class='btn btn-outline-primary' href="../views/TP2-E4-cinemas.php" role='button'>Cargar otra pelicula</a>
  </div>

</div>


<?php include_once 'includes/foot.php'  ?>