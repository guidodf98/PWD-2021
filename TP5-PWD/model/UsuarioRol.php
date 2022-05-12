<?php
class UsuarioRol {
  private $objusuario;
  private $objrol;
  private $mensajeoperacion;


  public function __construct() {
    $this->objusuario = null;
    $this->objrol = null;
    $this->mensajeoperacion = "";
  }

  public function setear($datos) {
    $this->setObjUsuario($datos['objusuario']);
    $this->setObjRol($datos['objrol']);
  }

  /**
   * @return Usuario
   */
  public function getObjUsuario() {
    return $this->objusuario;
  }
  /**
   * @param Usuario $objusuario
   */
  public function setObjUsuario($objusuario) {
    $this->objusuario = $objusuario;
  }

  /**
   * @return Rol
   */
  public function getObjRol() {
    return $this->objrol;
  }
  /**
   * @param Rol $objrol
   */
  public function setObjRol($objrol) {
    $this->objrol = $objrol;
  }

  public function getmensajeoperacion() {
    return $this->mensajeoperacion;
  }
  public function setmensajeoperacion($valor) {
    $this->mensajeoperacion = $valor;
  }

  public function cargar() {
    $resp = false;
    $db = new BaseDatos();
    $sql = "SELECT * FROM usuariorol WHERE idusuario = {$this->getObjUsuario()->getIdUsuario()} AND idrol = {$this->getObjRol()->getIdRol()}";
    if ($db->Iniciar()) {
      if ($db->Ejecutar($sql)) {
        if ($row = $db->Registro()) {
          $objusuario = new Usuario();
          $objusuario->setIdUsuario($row['idusuario']);
          $objusuario->cargar();

          $objRol = new Rol();
          $objRol->setIdRol($row['idrol']);
          $objRol->cargar();

          $datos = [
            'objusuario' => $objusuario,
            'objrol' => $objRol,
          ];

          $this->setear($datos);
          $resp = true;
        }
      } else {
        $this->setmensajeoperacion("UsuarioRol->listar: " . $db->getError());
      }
    } else {
      $this->setmensajeoperacion("UsuarioRol->listar: " . $db->getError());
    }
    return $resp;
  }

  public function insertar() {
    $resp = false;
    $db = new BaseDatos();
    $sql = "INSERT INTO usuariorol(idusuario, idrol) VALUES({$this->getObjUsuario()->getIdUsuario()}, {$this->getObjRol()->getIdRol()});";
    if ($db->Iniciar()) {
      if ($db->Ejecutar($sql)) {
        $resp = true;
      } else {
        $this->setmensajeoperacion("UsuarioRol->insertar: " . $db->getError());
      }
    } else {
      $this->setmensajeoperacion("UsuarioRol->insertar: " . $db->getError());
    }
    return $resp;
  }

  //Hace falta el modificar en esta clase?
  public function modificar() {
    $resp = false;
    $db = new BaseDatos();
    $sql = "UPDATE usuariorol SET idrol={$this->getObjRol()->getIdRol()}, idusuario={$this->getObjUsuario()->getIdUsuario()} WHERE idusuario={$this->getObjUsuario()->getIdUsuario()} AND idrol={$this->getObjRol()->getIdRol()}";
    if ($db->Iniciar()) {
      if ($db->Ejecutar($sql)) {
        $resp = true;
      } else {
        $this->setmensajeoperacion("UsuarioRol->modificar: " . $db->getError());
      }
    } else {
      $this->setmensajeoperacion("UsuarioRol->modificar: " . $db->getError());
    }
    return $resp;
  }

  public function eliminar() {
    $resp = false;
    $db = new BaseDatos();
    $sql = "DELETE FROM usuariorol WHERE idusuario={$this->getObjUsuario()->getIdUsuario()} AND idrol={$this->getObjRol()->getIdRol()}";
    if ($db->Iniciar()) {
      if ($db->Ejecutar($sql)) {
        return true;
      } else {
        $this->setmensajeoperacion("UsuarioRol->eliminar: " . $db->getError());
      }
    } else {
      $this->setmensajeoperacion("UsuarioRol->eliminar: " . $db->getError());
    }
    return $resp;
  }

  public static function listar($parametro = "") {
    $arreglo = array();
    $db = new BaseDatos();
    $sql = "SELECT * FROM usuariorol ";
    if ($parametro != "") {
      $sql .= 'WHERE ' . $parametro;
    }
    $res = $db->Ejecutar($sql);
    if ($res > -1) {
      if ($res > 0) {
        while ($row = $db->Registro()) {
          $obj = new UsuarioRol();

          $objUsuario = new Usuario();
          $objUsuario->setIdUsuario($row['idusuario']);
          $objUsuario->cargar();

          $objRol = new Rol();
          $objRol->setIdRol($row['idrol']);
          $objRol->cargar();

          $datos = [
            'objusuario' => $objUsuario,
            'objrol' => $objRol
          ];
          $obj->setear($datos);
          array_push($arreglo, $obj);
        }
      }
    }

    return $arreglo;
  }
}
