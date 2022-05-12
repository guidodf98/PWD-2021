<?php
class Persona {
  private $nrodni;
  private $apellido;
  private $nombre;
  private $fechanac;
  private $telefono;
  private $domicilio;
  private $mensajeoperacion;
  private $colAutos;


  public function __construct() {
    $this->nrodni = "";
    $this->apellido = "";
    $this->nombre = "";
    $this->fechanac = "";
    $this->colAutos = [];
    $this->mensajeoperacion = "";
  }

  public function setear($datos) {
    $this->setNroDni($datos['nrodni']);
    $this->setApellido($datos['apellido']);
    $this->setNombre($datos['nombre']);
    $this->setFechaNac($datos['fechanac']);
    $this->setTelefono($datos['telefono']);
    $this->setDomicilio($datos['domicilio']);
  }

  public function getNroDni() {
    return $this->nrodni;
  }
  public function setNroDni($nrodni) {
    $this->nrodni = $nrodni;
  }

  public function getApellido() {
    return $this->apellido;
  }
  public function setApellido($apellido) {
    $this->apellido = $apellido;
  }

  public function getNombre() {
    return $this->nombre;
  }
  public function setNombre($nombre) {
    $this->nombre = $nombre;
  }

  public function getFechaNac() {
    return $this->fechanac;
  }
  public function setFechaNac($fechanac) {
    $this->fechanac = $fechanac;
  }

  public function getTelefono() {
    return $this->telefono;
  }
  public function setTelefono($telefono) {
    $this->telefono = $telefono;
  }

  public function getDomicilio() {
    return $this->domicilio;
  }
  public function setDomicilio($domicilio) {
    $this->domicilio = $domicilio;
  }

  public function getColAutos() {
    $where['dniduenio'] = $this->getNroDni();
    $objAbmAuto = new AbmAuto;
    $colAutos = $objAbmAuto->buscar($where);
    $this->setColAutos($colAutos);

    return $this->getColAutos();
  }
  public function setColAutos($colAutos) {
    $this->colAutos = $colAutos;
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
    $sql = "SELECT * FROM persona WHERE nrodni = " . $this->getNroDni();
    if ($db->Iniciar()) {
      if ($db->Ejecutar($sql)) {
        if ($row = $db->Registro()) {
          $datos = [
            'nrodni' => $row['nrodni'],
            'apellido' => $row['apellido'],
            'nombre' => $row['nombre'],
            'fechanac' => $row['fechanac'],
            'telefono' => $row['telefono'],
            'domicilio' => $row['domicilio']
          ];
          $this->setear($datos);
          $resp = true;
        }
      } else {
        $this->setmensajeoperacion("Persona->listar: " . $db->getError());
      }
    } else {
      $this->setmensajeoperacion("Persona->listar: " . $db->getError());
    }
    return $resp;
  }

  public function insertar() {
    $resp = false;
    $db = new BaseDatos();
    $sql = "INSERT INTO persona(nrodni, apellido, nombre, fechanac, telefono, domicilio)  VALUES('{$this->getNroDni()}', '{$this->getApellido()}', '{$this->getNombre()}', '{$this->getFechaNac()}', '{$this->getTelefono()}', '{$this->getDomicilio()}');";
    if ($db->Iniciar()) {
      if ($db->Ejecutar($sql)) {
        $resp = true;
      } else {
        $this->setmensajeoperacion("Persona->insertar: " . $db->getError());
      }
    } else {
      $this->setmensajeoperacion("Persona->insertar: " . $db->getError());
    }
    return $resp;
  }

  public function modificar() {
    $resp = false;
    $db = new BaseDatos();
    $sql = "UPDATE persona SET apellido='{$this->getApellido()}', nombre='{$this->getNombre()}', fechanac='{$this->getFechaNac()}', telefono='{$this->getTelefono()}', domicilio='{$this->getDomicilio()}' WHERE nrodni={$this->getNroDni()}";
    if ($db->Iniciar()) {
      if ($db->Ejecutar($sql)) {
        $resp = true;
      } else {
        $this->setmensajeoperacion("Persona->modificar: " . $db->getError());
      }
    } else {
      $this->setmensajeoperacion("Persona->modificar: " . $db->getError());
    }
    return $resp;
  }

  public function eliminar() {
    $resp = false;
    $db = new BaseDatos();

    // hacer un foreach buscando los autos del dueño y borrarlos


    $sql = "DELETE FROM persona WHERE nrodni=" . $this->getNroDni();
    if ($db->Iniciar()) {
      if ($db->Ejecutar($sql)) {
        return true;
      } else {
        $this->setmensajeoperacion("Persona->eliminar: " . $db->getError());
      }
    } else {
      $this->setmensajeoperacion("Persona->eliminar: " . $db->getError());
    }
    return $resp;
  }

  public static function listar($parametro = "") {
    $arreglo = array();
    $db = new BaseDatos();
    $sql = "SELECT * FROM persona ";
    if ($parametro != "") {
      $sql .= 'WHERE ' . $parametro;
    }
    $res = $db->Ejecutar($sql);
    if ($res > -1) {
      if ($res > 0) {
        while ($row = $db->Registro()) {
          $obj = new Persona();
          $datos = [
            'nrodni' => $row['nrodni'],
            'apellido' => $row['apellido'],
            'nombre' => $row['nombre'],
            'fechanac' => $row['fechanac'],
            'telefono' => $row['telefono'],
            'domicilio' => $row['domicilio']
          ];
          $obj->setear($datos);
          array_push($arreglo, $obj);
        }
      }
    }

    return $arreglo;
  }
}
