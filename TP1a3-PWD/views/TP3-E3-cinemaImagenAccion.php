<?php $title = 'Cine con Imagen Accion';
include_once 'includes/head.php' ?>
<?php include_once 'includes/navbar.php' ?>
<?php include_once '../control/CinemasImagenControl.php' ?>

<?php
$control = new CinemasImagenControl();
$info = $control->infoPelicula();

?>

<div class="row container mt-5 mx-auto py-5 ">

  <h1 class="mb-4 text-primary">La película introducida es </h1>
  <div class="col rounded-3">

    <?php echo $info['content']; ?>
  </div>

  <div class="container col-md-auto">

    <?php
    if ($info['error']) {
      echo "<h3>{$info['error']}";
    } else {
      echo "<img src={$info['link']} height='500' alt='imagen de la pelicula'>";
    }

    ?>
  </div>

  <div class="text-center mt-5">
    <a class='btn btn-outline-primary' href="../views/TP3-E3-cinemaImagen.php" role='button'>Cargar otra pelicula</a>
  </div>

</div>


<?php include_once 'includes/foot.php'  ?>