<?php
include_once "../views/utilities/functions.php";

class SaludoEstudioControl {
  function saludar() {
    $data = data_submitted();

    $nombre = $data['nombre'];
    $apellido = $data['apellido'];
    $direccion = $data['direccion'];
    $edad = $data['edad'];
    $sexo = $data['sexo'];
    $estudio = $data['estudio'];

    $respuesta = "Hola, soy {$nombre} {$apellido}, {$sexo} tengo {$edad} años y vivo en {$direccion}<br>{$estudio}";

    return $respuesta;
  }
}
