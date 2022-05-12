<?php
class AbmAuto {
  //Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto


  /**
   * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto
   * @param array $param
   * @return Auto
   */
  private function cargarObjeto($datosForm) {
    $obj = null;

    if (array_key_exists('patente', $datosForm) and array_key_exists('marca', $datosForm) and array_key_exists('modelo', $datosForm) and array_key_exists('dniduenio', $datosForm)) {
      
      $objPersona = new Persona();
      $objPersona->setNroDni($datosForm['dniduenio']);
      $objPersona->cargar();
      $datosForm['objPersona'] = $objPersona;

      $obj = new Auto();
      $obj->setear($datosForm);
    }
    return $obj;
  }

  /**
   * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto que son claves
   * @param array $param
   * @return Auto
   */
  private function cargarObjetoConClave($param) {
    $obj = null;

    if (isset($param['patente'])) {
      $obj = new Auto();
      $obj->setear($param['patente'], null);
    }
    return $obj;
  }


  /**
   * Corrobora que dentro del arreglo asociativo estan seteados los campos claves
   * @param array $param
   * @return boolean
   */

  private function seteadosCamposClaves($param) {
    $resp = false;
    if (isset($param['patente']))
      $resp = true;
    return $resp;
  }

  /**
   * 
   * @param array $param
   */
  public function alta($param) {
    $resp = false;
    // $param['patente'] = null;
    $objtAuto = $this->cargarObjeto($param);
    // verEstructura($objtAuto);
    if ($objtAuto != null and $objtAuto->insertar()) {
      $resp = true;
    }
    return $resp;
  }
  /**
   * permite eliminar un objeto 
   * @param array $param
   * @return boolean
   */
  public function baja($param) {
    $resp = false;
    if ($this->seteadosCamposClaves($param)) {
      $objtAuto = $this->cargarObjetoConClave($param);
      if ($objtAuto != null and $objtAuto->eliminar()) {
        $resp = true;
      }
    }

    return $resp;
  }

  /**
   * permite modificar un objeto
   * @param array $param
   * @return boolean
   */
  public function modificacion($param) {
    // echo "Estoy en modificacion";
    $resp = false;
    if ($this->seteadosCamposClaves($param)) {
      $objtAuto = $this->cargarObjeto($param);
      if ($objtAuto != null and $objtAuto->modificar()) {
        $resp = true;
      }
    }
    return $resp;
  }

  /**
   * permite buscar un objeto
   * @param array $param
   * @return array
   */
  public function buscar($condiciones) {
    $where = " true ";
    if ($condiciones <> NULL) {
      if (isset($condiciones['patente']))
        $where .= " and patente ='" . $condiciones['patente'] . "'";
      if (isset($condiciones['marca']))
        $where .= " and marca ='" . $condiciones['marca'] . "'";
      if (isset($condiciones['modelo']))
        $where .= " and modelo ='" . $condiciones['modelo'] . "'";
      if (isset($condiciones['dniduenio']))
        $where .= " and dniduenio ='" . $condiciones['dniduenio'] . "'";
    }
    $arreglo = Auto::listar($where);
    return $arreglo;
  }
}
