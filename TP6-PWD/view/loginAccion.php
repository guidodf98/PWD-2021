<?php include_once "../configuracion.php" ?>

<?php
$control = new LoginControl();
$sesion = $control->logear();
?>

<?php
if ($sesion->getObjUsuario() != null) {
  if ($sesion->getObjUsuario() != null and $sesion->activa() and !$sesion->getObjUsuario()->getUsDeshabilitado()) {
    header("Status: 301 Moved Permanently");
    header("Location: http://" . $_SERVER['HTTP_HOST'] . "/$PROYECTO/view/paginaSegura.php");
  } elseif ($sesion->getObjUsuario()->getUsDeshabilitado()) {
    header("Status: 301 Moved Permanently");
    header("Location: " . $LOGIN . "?error=2");
    $sesion->cerrar();
  }
} else {
  header("Status: 301 Moved Permanently");
  header("Location: " . $LOGIN . "?error=1");
}

?>