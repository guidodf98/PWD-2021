<?php
include_once "../util/funciones.php";

class BuscarAutoControl {
  function buscar() {
    $data = data_submitted();

    $auto = new AbmAuto();
    $d['patente'] = $data['patente'];
    $autos = $auto->buscar($d);
    if (count($autos) == 0) {
      $autos = null;
    }else{
      $autos = $autos[0];
    }

    return $autos;
  }
}
