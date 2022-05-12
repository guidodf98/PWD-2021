<?php
include_once "../views/utilities/functions.php";

class SaludoEdadControl {
  function saludar() {
    $data = data_submitted();

    $nombre = $data['nombre'];
    $apellido = $data['apellido'];
    $direccion = $data['direccion'];
    $edad = $data['edad'];

    if ($edad >= 18) {
      $edad = 'mayor de edad';
    } else {
      $edad = 'menor de edad';
    }

    $respuesta = "Hola, soy {$nombre} {$apellido} soy {$edad} y vivo en {$direccion}";

    return $respuesta;
  }
}
