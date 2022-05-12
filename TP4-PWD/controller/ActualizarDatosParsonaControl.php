<?php
include_once "../util/funciones.php";


class ActualizarDatosParsonaControl {
  /**
   * Mensaje de funcion
   * 
   */
  function actualizar() {
    $data = data_submitted();
    $objAbmPersona = new AbmPersona();

    $exito = $objAbmPersona->modificacion($data);

    return $exito;
  }
}
