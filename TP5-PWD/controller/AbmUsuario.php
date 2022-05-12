<?php
class AbmUsuario {
  //Espera como parametro un arreglo asociativo donde las claves coinciden con los usnombres de las variables instancias del objeto


  /**
   * Espera como parametro un arreglo asociativo donde las claves coinciden con los usnombres de las variables instancias del objeto
   * @param array $param
   * @return Usuario
   */
  private function cargarObjeto($datosForm) {
    $obj = null;

    if (
      array_key_exists('idusuario', $datosForm) and
      array_key_exists('usnombre', $datosForm) and
      array_key_exists('uspass', $datosForm) and
      array_key_exists('usmail', $datosForm) and
      array_key_exists('usdeshabilitado', $datosForm)
    ) {
      $obj = new Usuario();
      $obj->setear($datosForm);
    }
    return $obj;
  }

  /**
   * Espera como parametro un arreglo asociativo donde las claves coinciden con los usnombres de las variables instancias del objeto que son claves
   * @param array $param
   * @return Usuario
   */
  private function cargarObjetoConClave($param) {
    $obj = null;

    if (isset($param['idusuario'])) {
      $obj = new Usuario();
      $obj->setear($param['idusuario'], null);
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
    if (isset($param['idusuario']))
      $resp = true;
    return $resp;
  }

  /**
   * 
   * @param array $param
   */
  public function alta($param) {
    $resp = false;
    $param['idusuario'] = null;
    $objtUsuario = $this->cargarObjeto($param);
    if ($objtUsuario != null and $objtUsuario->insertar()) {
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
      $objtUsuario = $this->cargarObjetoConClave($param);
      if ($objtUsuario != null and $objtUsuario->eliminar()) {
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
      $objtUsuario = $this->cargarObjeto($param);
      if ($objtUsuario != null and $objtUsuario->modificar()) {
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
    $where = " true";
    if ($condiciones <> null) {
      if (isset($condiciones['idusuario']))
        $where .= " and idusuario ={$condiciones['idusuario']}";
      if (isset($condiciones['usnombre']))
        $where .= " and usnombre ='{$condiciones['usnombre']}'";
      if (isset($condiciones['uspass']))
        $where .= " and uspass ='{$condiciones['uspass']}'";
      if (isset($condiciones['usmail']))
        $where .= " and usmail ='{$condiciones['usmail']}'";
      if (isset($condiciones['usdeshabilitado']))
        $where .= " and usdeshabilitado ='{$condiciones['usdeshabilitado']}'";
    }
    $arreglo = Usuario::listar($where);
    return $arreglo;
  }
}
