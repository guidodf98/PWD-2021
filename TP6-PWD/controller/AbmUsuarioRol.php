<?php
class AbmUsuarioRol {
  //Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto

  /**
   * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto
   * @param array $param
   * @return UsuarioRol
   */
  private function cargarObjeto($datosForm) {
    $obj = null;

    if (
      array_key_exists('idusuario', $datosForm) and
      array_key_exists('idrol', $datosForm)
    ) {
      $objUsuario = new Usuario();
      $objUsuario->setIdUsuario($datosForm['idusuario']);
      $objUsuario->cargar();

      $objRol = new Rol();
      $objRol->setIdRol($datosForm['idrol']);
      $objRol->cargar();

      $obj = new UsuarioRol();
      $datos = [
        'objusuario' => $objUsuario,
        'objrol' => $objRol,
      ];

      $obj->setear($datos);
    }
    return $obj;
  }

  /**
   * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto que son claves
   * @param array $param
   * @return UsuarioRol
   */
  private function cargarObjetoConClave($param) {
    $obj = null;


    if (isset($param['idusuario']) and isset($param['idrol'])) {
      $objUsuario = new Usuario();
      $objUsuario->setIdUsuario($param['idusuario']);
      $objUsuario->cargar();

      $objRol = new Rol();
      $objRol->setIdRol($param['idrol']);
      $objRol->cargar();


      $obj = new UsuarioRol();
      $datos = [
        'objusuario' => $objUsuario,
        'objrol' => $objRol,
      ];
      $obj->setear($datos);
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
    if (isset($param['idusuario']) and isset($param['idrol']))
      $resp = true;
    return $resp;
  }

  /**
   * 
   * @param array $param
   */
  public function alta($param) {
    $resp = false;
    $objUsuarioRol = $this->cargarObjeto($param);
    if ($objUsuarioRol != null and $objUsuarioRol->insertar()) {
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
      $objUsuarioRol = $this->cargarObjetoConClave($param);
      if ($objUsuarioRol != null and $objUsuarioRol->eliminar()) {
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
      $objUsuarioRol = $this->cargarObjeto($param);
      if ($objUsuarioRol != null and $objUsuarioRol->modificar()) {
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
    if ($where <> null) {
      if (isset($condiciones['idusuario']))
        $where .= " and idusuario ={$condiciones['idusuario']}";
      if (isset($condiciones['idrol']))
        $where .= " and idrol ={$condiciones['idrol']}";
    }
    $arreglo = UsuarioRol::listar($where);
    return $arreglo;
  }
}
