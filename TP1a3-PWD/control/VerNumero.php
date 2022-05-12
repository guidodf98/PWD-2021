<?php
include_once "../views/utilities/functions.php";

class VerNumero {
  function checkear() {
    $data = data_submitted();
    $numero = $data['numero'];
    $respuesta = '';

    if ($numero > 0) {
      $respuesta = 'El numero es positivo';
    } elseif ($numero < 0) {
      $respuesta = 'El numero es negativo';
    } elseif ($numero == 0) {
      $respuesta = 'El numero es 0';
    } else {
      $respuesta = 'El valor ingresado no es un numero';
    }

    return $respuesta;
  }
}
