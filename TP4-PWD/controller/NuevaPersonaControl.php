<?php
include_once "../util/funciones.php";

class NuevaPersonaControl {
  function registrar() {
    $data = data_submitted();
    $persona = new AbmPersona();

    $datosBuscar['nrodni'] = $data['nrodni'];
    $personas = $persona->buscar($datosBuscar);
    if (count($personas) != 0) {
      // Hay una persona con este dni;
      $exito = false;
    } else {
      // No hay una persona con este dni;
      $exito = $persona->alta($data);
    }

    return $exito;
  }
}
