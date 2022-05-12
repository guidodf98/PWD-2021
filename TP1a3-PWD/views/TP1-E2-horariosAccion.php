<?php $title = 'Horarios Accion';
include_once 'includes/head.php' ?>
<?php include_once 'includes/navbar.php' ?>
<?php include_once '../control/HorariosControl.php' ?>

<?php
$control = new HorariosControl();
$horarios = $control->armarHorarios();

?>

<div class="container mt-20vh">

  <h2 class="text-center mb-4">
    Horarios <br>Programación Web Dinámica
  </h2>

  <?php
  foreach ($horarios as $key => $hora) {
    echo "<p class='text-center'><b>" . ucfirst(($key)) . ":</b> {$hora}</p>";
  }
  ?>

  <div class="text-center mt-5">
    <a class='btn btn-outline-primary' href="../views/TP1-E2-horarios.php" role='button'>Cargar otro horario</a>
  </div>

</div>


<?php include_once 'includes/foot.php'  ?>