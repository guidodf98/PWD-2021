<?php
class Auto {
  private $patente;
  private $marca;
  private $modelo;
  private $objPersona;
  private $mensajeoperacion;


  public function __construct() {
    $this->patente = "";
    $this->marca = "";
    $this->modelo = "";
    $this->objPersona = null;
    $this->mensajeoperacion = "";
  }

  public function setear($datos) {
    $this->setPatente($datos['patente']);
    $this->setMarca($datos['marca']);
    $this->setModelo($datos['modelo']);
    $this->setObjPersona($datos['objPersona']);
  }

  public function getPatente() {
    return $this->patente;
  }
  public function setPatente($patente) {
    $this->patente = $patente;
  }

  public function getMarca() {
    return $this->marca;
  }
  public function setMarca($marca) {
    $this->marca = $marca;
  }

  public function getModelo() {
    return $this->modelo;
  }
  public function setModelo($modelo) {
    $this->modelo = $modelo;
  }

  /**
   * @return Persona
   */
  public function getObjPersona() {
    return $this->objPersona;
  }
  public function setObjPersona($objPersona) {
    $this->objPersona = $objPersona;
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
    $sql = "SELECT * FROM auto WHERE patente = '" . $this->getPatente() . "'";
    if ($db->Iniciar()) {
      if ($db->Ejecutar($sql)) {
        if ($row = $db->Registro()) {
          $objPersona = new Persona();
          $objPersona->setNroDni($row['dniduenio']);
          $objPersona->cargar();
          $datos = [
            'patente' => $row['patente'],
            'marca' => $row['marca'],
            'modelo' => $row['modelo'],
            'objPersona' => $objPersona
          ];
          $this->setear($datos);
          $resp = true;
        }
      } else {
        $this->setmensajeoperacion("Auto->listar: " . $db->getError());
      }
    } else {
      $this->setmensajeoperacion("Auto->listar: " . $db->getError());
    }
    return $resp;
  }

  public function insertar() {
    $resp = false;
    $db = new BaseDatos();
    $sql = "INSERT INTO auto(patente, marca, modelo, dniduenio)  VALUES('{$this->getPatente()}', '{$this->getMarca()}', '{$this->getModelo()}', '{$this->getObjPersona()->getNroDni()}');";
    if ($db->Iniciar()) {
      if ($db->Ejecutar($sql)) {
        $resp = true;
      } else {
        $this->setmensajeoperacion("Auto->insertar: " . $db->getError());
      }
    } else {
      $this->setmensajeoperacion("Auto->insertar: " . $db->getError());
    }
    return $resp;
  }

  public function modificar() {
    $resp = false;
    $db = new BaseDatos();
    $sql = "UPDATE auto SET marca='{$this->getMarca()}', modelo='{$this->getModelo()}', dniduenio='{$this->getObjPersona()->getNroDni()}' WHERE patente='{$this->getPatente()}'";
    if ($db->Iniciar()) {
      if ($db->Ejecutar($sql)) {
        $resp = true;
      } else {
        $this->setmensajeoperacion("Auto->modificar: " . $db->getError());
      }
    } else {
      $this->setmensajeoperacion("Auto->modificar: " . $db->getError());
    }
    return $resp;
  }

  public function eliminar() {
    $resp = false;
    $db = new BaseDatos();
    $sql = "DELETE FROM auto WHERE patente=" . $this->getPatente();
    if ($db->Iniciar()) {
      if ($db->Ejecutar($sql)) {
        return true;
      } else {
        $this->setmensajeoperacion("Auto->eliminar: " . $db->getError());
      }
    } else {
      $this->setmensajeoperacion("Auto->eliminar: " . $db->getError());
    }
    return $resp;
  }

  public static function listar($parametro = "") {
    $arreglo = array();
    $db = new BaseDatos();
    $sql = "SELECT * FROM auto ";
    if ($parametro != "") {
      $sql .= 'WHERE ' . $parametro;
    }
    $res = $db->Ejecutar($sql);
    
    if ($res > -1) {
      if ($res > 0) {
        while ($row = $db->Registro()) {
          $obj = new Auto();

          $objPersona = new Persona();
          $objPersona->setNroDni($row['dniduenio']);
          $objPersona->cargar();

          $datos = [
            'patente' => $row['patente'],
            'marca' => $row['marca'],
            'modelo' => $row['modelo'],
            'objPersona' => $objPersona
          ];

          $obj->setear($datos);
          array_push($arreglo, $obj);
        }
      }
    }

    return $arreglo;
  }
}
