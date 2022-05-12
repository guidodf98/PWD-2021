<?php
include_once "../views/utilities/functions.php";

class SaludoControl {
  function saludar() {
    $data = data_submitted();

    $nombre = $data['nombre'];
    $apellido = $data['apellido'];
    $direccion = $data['direccion'];
    $edad = $data['edad'];
    
    $respuesta = "Hola, yo soy {$nombre} {$apellido} tengo {$edad} años y vivo en {$direccion}";

    return $respuesta;
  }
}
