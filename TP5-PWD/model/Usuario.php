<?php
class Usuario {
  private $idusuario;
  private $usnombre;
  private $uspass;
  private $usmail;
  private $usdeshabilitado;
  private $colRoles;
  private $mensajeoperacion;


  public function __construct() {
    $this->idusuario = null;
    $this->usnombre = "";
    $this->uspass = "";
    $this->usmail = "";
    $this->usdeshabilitado = null;
    $this->colRoles = [];
    $this->mensajeoperacion = "";
  }

  public function setear($datos) {
    $this->setIdUsuario(intval($datos['idusuario']));
    $this->setUsNombre($datos['usnombre']);
    $this->setUsPass($datos['uspass']);
    $this->setUsMail($datos['usmail']);
    $this->setUsDeshabilitado($datos['usdeshabilitado']);
  }

  public function getIdUsuario() {
    return $this->idusuario;
  }
  public function setIdUsuario($idusuario) {
    $this->idusuario = $idusuario;
  }

  public function getUsNombre() {
    return $this->usnombre;
  }
  public function setUsNombre($usnombre) {
    $this->usnombre = $usnombre;
  }

  public function getUsPass() {
    return $this->uspass;
  }
  public function setUsPass($uspass) {
    $this->uspass = $uspass;
  }

  public function getUsMail() {
    return $this->usmail;
  }
  public function setUsMail($usmail) {
    $this->usmail = $usmail;
  }

  public function getUsDeshabilitado() {
    return $this->usdeshabilitado;
  }
  public function setUsDeshabilitado($usdeshabilitado) {
    $this->usdeshabilitado = $usdeshabilitado;
  }

  public function getColRoles() {
    $condicionRol['idusuario'] = $this->getIdUsuario();
    $ambUsuarioRol = new AbmUsuarioRol();
    $colRolesUsuario = $ambUsuarioRol->buscar($condicionRol);

    $rol = [];
    $colRoles = [];
    foreach ($colRolesUsuario as $rolUsuario) {
      $rol = $rolUsuario->getObjRol();
      array_push($colRoles, $rol);
    }
    $this->setColRoles($colRoles);
    return $this->colRoles;
  }

  public function setColRoles($colRoles) {
    $this->colRoles = $colRoles;
  }

  public function getmensajeoperacion() {
    return $this->mensajeoperacion;
  }
  public function setmensajeoperacion($mensajeoperacion) {
    $this->mensajeoperacion = $mensajeoperacion;
  }


  public function cargar() {
    $resp = false;
    $db = new BaseDatos();
    $sql = "SELECT * FROM usuario WHERE idusuario = {$this->getIdUsuario()}";
    if ($db->Iniciar()) {
      if ($db->Ejecutar($sql)) {
        if ($row = $db->Registro()) {
          $this->setear($row);
          $resp = true;
        }
      } else {
        $this->setmensajeoperacion("Usuario->listar: {$db->getError()}");
      }
    } else {
      $this->setmensajeoperacion("Usuario->listar: {$db->getError()}");
    }
    return $resp;
  }

  public function insertar() {
    $resp = false;
    $db = new BaseDatos();
    $sql = "INSERT INTO usuario(usnombre, uspass, usmail, usdeshabilitado)  
            VALUES('{$this->getUsNombre()}', '{$this->getUsPass()}', '{$this->getUsMail()}', '{$this->getUsDeshabilitado()}');";
    if ($db->Iniciar()) {
      if (($id = $db->Ejecutar($sql)) != -1) { // PREGUNTAR SI EL MENOS UNO ESTA BIEN (REVISAR METODOS QUE LLAMA)
        $this->setIdUsuario($id);
        $resp = true;
      } else {
        $this->setmensajeoperacion("Usuario->insertar: {$db->getError()}");
      }
    } else {
      $this->setmensajeoperacion("Usuario->insertar: {$db->getError()}");
    }
    return $resp;
  }

  public function modificar() {
    $resp = false;
    $db = new BaseDatos();
    if ($this->getUsDeshabilitado()) {
      $sql = "UPDATE usuario SET usnombre='{$this->getUsNombre()}', uspass='{$this->getUsPass()}', usmail='{$this->getUsMail()}', usdeshabilitado='{$this->getUsDeshabilitado()}' WHERE idusuario={$this->getIdUsuario()}";
    } else {
      $sql = "UPDATE usuario SET usnombre='{$this->getUsNombre()}', uspass='{$this->getUsPass()}', usmail='{$this->getUsMail()}', usdeshabilitado=NULL WHERE idusuario={$this->getIdUsuario()}";
    }

    if ($db->Iniciar()) {
      if ($db->Ejecutar($sql)) {
        $resp = true;
      } else {
        $this->setmensajeoperacion("Usuario->modificar: {$db->getError()}");
      }
    } else {
      $this->setmensajeoperacion("Usuario->modificar: {$db->getError()}");
    }
    return $resp;
  }

  public function eliminar() {
    $resp = false;
    $db = new BaseDatos();
    $sql = "DELETE FROM usuario WHERE idusuario= {$this->getIdUsuario()}";
    if ($db->Iniciar()) {
      if ($db->Ejecutar($sql)) {
        return true;
      } else {
        $this->setmensajeoperacion("Usuario->eliminar: {$db->getError()}");
      }
    } else {
      $this->setmensajeoperacion("Usuario->eliminar: {$db->getError()}");
    }
    return $resp;
  }

  public static function listar($parametro = "") {
    $arreglo = array();
    $db = new BaseDatos();
    $sql = "SELECT * FROM usuario ";

    if ($parametro != "") {
      $sql .= 'WHERE' . $parametro;
    }
    $res = $db->Ejecutar($sql);
    if ($res > -1) { // Que es el -1 y el 0
      if ($res > 0) {
        while ($row = $db->Registro()) {
          $obj = new Usuario();
          $obj->setear($row); // Mandar row?
          array_push($arreglo, $obj);
        }
      }
    }

    return $arreglo;
  }
}
