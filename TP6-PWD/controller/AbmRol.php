<?php
class AbmRol {
  //Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto


  /**
   * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto
   * @param array $param
   * @return Rol
   */
  private function cargarObjeto($datosForm) {
    $obj = null;

    if (
      array_key_exists('idrol', $datosForm) and
      array_key_exists('rodescripcion', $datosForm)
    ) {
      $obj = new Rol();
      $obj->setear($datosForm);
    }
    return $obj;
  }

  /**
   * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto que son claves
   * @param array $param
   * @return Rol
   */
  private function cargarObjetoConClave($param) {
    $obj = null;

    if (isset($param['idrol'])) {
      $obj = new Rol();
      $obj->setIdRol($param['idrol']);
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
    if (isset($param['idrol']))
      $resp = true;
    return $resp;
  }

  /**
   * 
   * @param array $param
   */
  public function alta($param) {
    $resp = false;
    $param['idrol'] = null;
    $objRol = $this->cargarObjeto($param);
    if ($objRol != null and $objRol->insertar()) {
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
      $objRol = $this->cargarObjetoConClave($param);
      if ($objRol != null and $objRol->eliminar()) {
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
    $resp = false;
    if ($this->seteadosCamposClaves($param)) {
      $objRol = $this->cargarObjeto($param);
      if ($objRol != null and $objRol->modificar()) {
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
      if (isset($condiciones['idrol']))
        $where .= " and idrol ='{$condiciones['idrol']}'";
      if (isset($condiciones['rodescripcion']))
        $where .= " and rodescripcion ='{$condiciones['rodescripcion']}'";
    }
    $arreglo = Rol::listar($where);
    return $arreglo;
  }
}
