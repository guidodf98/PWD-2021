<?php
include_once "../util/funciones.php";

class CambioDuenioControl {
  function cambiarDuenio() {
    $data = data_submitted();
    $objAbmAuto = new AbmAuto();
    $objAbmPersona = new AbmPersona();

    $datosBuscar['nrodni'] = $data['nrodni'];
    $datosBuscar['patente'] = $data['patente'];

    $autos = $objAbmAuto->buscar($datosBuscar);
    $personas = $objAbmPersona->buscar($datosBuscar);

    $resp['exito'] = false;
    $resp['existePersona'] = true;
    

    if (count($personas) == 0) {
      $resp['mensaje'] = "No existe una persona con este DNI";
      $resp['existePersona'] = false;
    } else {
      if (count($autos) == 0) {
        $resp['mensaje'] = "No hay auto con esta patente";
      } else {

        $auto = $autos[0];
        $data = [
          'patente' => $auto->getPatente(),
          'marca' => $auto->getMarca(),
          'modelo' => $auto->getModelo(),
          'dniduenio' => $data['nrodni']
        ];

        if ($resp['exito'] = $objAbmAuto->modificacion($data)) {
          $resp['mensaje'] = "Modificacion completo";
        } else {
          $resp['mensaje'] = "El dueño es el mismo";
        };
      }
    }

    return $resp;
  }
}
