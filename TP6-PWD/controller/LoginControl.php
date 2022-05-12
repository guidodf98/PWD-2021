<?php
include_once "../util/funciones.php";

class LoginControl {

  function logear() {
    $data = data_submitted();
    $sesion = null;

    if (isset($data['usnombre']) and isset($data['uspass'])) {
      $sesion = new Session();
      $sesion->iniciar($data['usnombre'], md5($data['uspass']));
      $sesion->validar();
    }

    return $sesion;
  }

  function deslogear() {
    $sesion = new Session();
    $sesion->cerrar();
  }
}
