<?php
include_once "../views/utilities/functions.php";

class SaludoDeporteControl {
  function saludar() {
    $data = data_submitted();


    $nombre = $data['nombre'];
    $apellido = $data['apellido'];
    $direccion = $data['direccion'];
    $edad = $data['edad'];
    $sexo = $data['sexo'];
    $estudio = $data['estudio'];
    
    if (array_key_exists("deporte", $data)) { // Busca la clave deporte en $data
      $deportes = $data['deporte'];
    } else {
      $deportes = []; // Si no encuentra, se iguala a un arreglo vacio para que count devuelva 0
    }

    $respuesta = "Hola, soy {$nombre} {$apellido}, {$sexo} tengo {$edad} años y vivo en {$direccion}<br>
                  {$estudio}, hago " . count($deportes) . " deportes";

    return $respuesta;
  }
}
