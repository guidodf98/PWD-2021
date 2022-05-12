<?php
class Rol {
  private $idrol;
  private $rodescripcion;
  private $mensajeoperacion;


  public function __construct() {
    $this->idrol = null;
    $this->rodescripcion = "";
  }

  public function setear($datos) {
    $this->setIdRol(intval($datos['idrol']));
    $this->setRoDescripcion($datos['rodescripcion']);
  }

  public function getIdRol() {
    return $this->idrol;
  }
  public function setIdRol($idrol) {
    $this->idrol = $idrol;
  }

  public function getRoDescripcion() {
    return $this->rodescripcion;
  }
  public function setRoDescripcion($rodescripcion) {
    $this->rodescripcion = $rodescripcion;
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
    $sql = "SELECT * FROM rol WHERE idrol = {$this->getIdRol()}";
    if ($db->Iniciar()) {
      if ($db->Ejecutar($sql)) {
        if ($row = $db->Registro()) {
          $datos = [
            'idrol' => $row['idrol'],
            'rodescripcion' => $row['rodescripcion'],
          ];
          $this->setear($datos);
          $resp = true;
        }
      } else {
        $this->setmensajeoperacion("Rol->listar: {$db->getError()}");
      }
    } else {
      $this->setmensajeoperacion("Rol->listar: {$db->getError()}");
    }
    return $resp;
  }

  public function insertar() {
    $resp = false;
    $db = new BaseDatos();
    $sql = "INSERT INTO rol(rodescripcion)  VALUES('{$this->getRoDescripcion()}');";
    if ($db->Iniciar()) {
      if ($id = $db->Ejecutar($sql)) {
        $this->setIdRol($id);
        $resp = true;
      } else {
        $this->setmensajeoperacion("Rol->insertar: {$db->getError()}");
      }
    } else {
      $this->setmensajeoperacion("Rol->insertar: {$db->getError()}");
    }
    return $resp;
  }

  public function modificar() {
    $resp = false;
    $db = new BaseDatos();
    $sql = "UPDATE rol SET rodescripcion='{$this->getRoDescripcion()}' WHERE idrol={$this->getIdRol()}";
    if ($db->Iniciar()) {
      if ($db->Ejecutar($sql)) {
        $resp = true;
      } else {
        $this->setmensajeoperacion("Rol->modificar: {$db->getError()}");
      }
    } else {
      $this->setmensajeoperacion("Rol->modificar: {$db->getError()}");
    }
    return $resp;
  }

  public function eliminar() {
    $resp = false;
    $db = new BaseDatos();
    $sql = "DELETE FROM rol WHERE idrol= {$this->getIdRol()}";
    if ($db->Iniciar()) {
      if ($db->Ejecutar($sql)) {
        return true;
      } else {
        $this->setmensajeoperacion("Rol->eliminar: {$db->getError()}");
      }
    } else {
      $this->setmensajeoperacion("Rol->eliminar: {$db->getError()}");
    }
    return $resp;
  }

  public static function listar($parametro = "") {
    $arreglo = array();
    $db = new BaseDatos();
    $sql = "SELECT * FROM rol ";

    if ($parametro != "") {
      $sql .= 'WHERE ' . $parametro;
    }

    $res = $db->Ejecutar($sql);
    if ($res > -1) {
      if ($res > 0) {
        while ($row = $db->Registro()) {
          $objRol = new Rol();

          $objRol->setear($row);
          array_push($arreglo, $objRol);
        }
      }
    }

    return $arreglo;
  }
}
