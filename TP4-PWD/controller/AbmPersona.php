<?php
class AbmPersona {
  //Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto


  /**
   * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto
   * @param array $param
   * @return Persona
   */
  private function cargarObjeto($datosForm) {
    $obj = null;

    if (
      array_key_exists('nrodni', $datosForm) and
      array_key_exists('apellido', $datosForm) and
      array_key_exists('nombre', $datosForm) and
      array_key_exists('fechanac', $datosForm) and
      array_key_exists('telefono', $datosForm) and
      array_key_exists('domicilio', $datosForm)
    ) {
      $obj = new Persona();
      $obj->setear($datosForm);
    }
    return $obj;
  }

  /**
   * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto que son claves
   * @param array $param
   * @return Persona
   */
  private function cargarObjetoConClave($param) {
    $obj = null;

    if (isset($param['nrodni'])) {
      $obj = new Persona();
      $obj->setear($param['nrodni'], null);
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
    if (isset($param['nrodni']))
      $resp = true;
    return $resp;
  }

  /**
   * 
   * @param array $param
   */
  public function alta($param) {
    $resp = false;
    // $param['nrodni'] = null;
    $objPersona = $this->cargarObjeto($param);
    // verEstructura($objPersona);
    if ($objPersona != null and $objPersona->insertar()) {
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
      $objPersona = $this->cargarObjetoConClave($param);
      if ($objPersona != null and $objPersona->eliminar()) {
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
    //echo "Estoy en modificacion";
    $resp = false;
    if ($this->seteadosCamposClaves($param)) {
      $objPersona = $this->cargarObjeto($param);
      if ($objPersona != null and $objPersona->modificar()) {
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
    if ($where <> null) {
      if (isset($condiciones['nrodni']))
        $where .= " and nrodni ='{$condiciones['nrodni']}'";
      if (isset($condiciones['apellido']))
        $where .= " and apellido ='{$condiciones['apellido']}'";
      if (isset($condiciones['nombre']))
        $where .= " and nombre ='{$condiciones['nombre']}'";
      if (isset($condiciones['fechanac']))
        $where .= " and fechanac ='{$condiciones['fechanac']}'";
      if (isset($condiciones['telefono']))
        $where .= " and telefono ='{$condiciones['telefono']}'";
      if (isset($condiciones['domicilio']))
        $where .= " and domicilio ='{$condiciones['domicilio']}'";
    }
    // echo $where;
    $arreglo = Persona::listar($where);
    return $arreglo;
  }
}
