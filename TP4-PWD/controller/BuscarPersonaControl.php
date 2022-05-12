<?php
include_once "../util/funciones.php";

class BuscarPersonaControl {
  function buscar() {
    $data = data_submitted();
    $objAbmPersona = new AbmPersona();
    $persona = null;

    $personas = $objAbmPersona->buscar($data);

    if (count($personas) != 0) {
      $persona = $personas[0];
    }

    return $persona;
  }
}
