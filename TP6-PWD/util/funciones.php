<?php
function data_submitted() {
  $_AAux = array();
  if (!empty($_POST))
    $_AAux = $_POST;
  else
            if (!empty($_GET)) {
    $_AAux = $_GET;
  }
  if (count($_AAux)) {
    foreach ($_AAux as $indice => $valor) {
      if ($valor == "")
        $_AAux[$indice] = 'null';
    }
  }
  return $_AAux;
}

function verEstructura($e) {
  echo "<pre>";
  print_r($e);
  echo "</pre>";
}

spl_autoload_register(function ($clase) {
  //echo "class ".$clase ;
  $directorios = array(
    $GLOBALS['ROOT'] . 'model/',
    $GLOBALS['ROOT'] . 'model/connection/',
    $GLOBALS['ROOT'] . 'controller/',
  );
  //print_object($directorios) ;
  foreach ($directorios as $directorio) {
    if (file_exists($directorio . $clase . '.php')) {
      // echo "se incluyo".$directorio.$clase . '.php';
      require_once($directorio . $clase . '.php');
      return;
    }
  }
});


function fecha($dias = 0) {
  date_default_timezone_set("America/Argentina/Buenos_Aires");
  $date = new DateTime('now');

  if ($dias != 0) {
    $date->modify('+' . $dias . ' day');
  }
  $date = $date->format('Y-m-d H:i:s');
  return $date;
}

//Ordenar arreglo
function cmp2($a, $b) {
  return strcmp($a->getUsDeshabilitado(), $b->getUsDeshabilitado());
}

function cmp($a, $b) {
  return strcmp($a->getUsNombre(), $b->getUsNombre());
}

function ordenarArregloUsuarios($array) {
  $usuariosDeshabilitados = [];
  $usuariosHabilitados = [];
  foreach ($array as $usuario) {
    if ($usuario->getUsDeshabilitado()) {
      $usuariosDeshabilitados[] = $usuario;
    } else {
      $usuariosHabilitados[] = $usuario;
    }
  }

  if ($usuariosHabilitados) {
    usort($usuariosHabilitados, "cmp");
  }

  if ($usuariosDeshabilitados) {
    usort($usuariosDeshabilitados, "cmp");
  }

  $resultado = array_merge($usuariosHabilitados, $usuariosDeshabilitados);
  return $resultado;
}
