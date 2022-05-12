<?php
include_once "../util/funciones.php";

class NuevoAutoControl {
  function registrar() {
    $data = data_submitted();
    $objAbmAuto = new AbmAuto();
    $objAbmPersona = new AbmPersona();

    $datosBuscar['nrodni'] = $data['dniduenio'];
    $datosBuscar['patente'] = $data['patente'];

    $autos = $objAbmAuto->buscar($datosBuscar);
    $personas = $objAbmPersona->buscar($datosBuscar);

    $resp['exito'] = false;
    $resp['existePersona'] = true;

    if (count($personas) == 0) {
      $resp['mensaje'] = "No existe una persona con este DNI";
      $resp['existePersona'] = false;
    } else {
      if (count($autos) != 0) {
        $resp['mensaje'] = "Hay un auto con esta patente";
      } else {
        $resp['mensaje'] = "Registro completo";
        $resp['exito'] = $objAbmAuto->alta($data);
      }
    }

    return $resp;
  }
}
