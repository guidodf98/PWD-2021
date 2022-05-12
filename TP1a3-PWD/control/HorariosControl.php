<?php
include_once "../views/utilities/functions.php";

class HorariosControl {
  function armarHorarios() {
    $data = data_submitted();

    $lunes = $data['horario-lunes'];
    $martes = $data['horario-martes'];
    $miercoles = $data['horario-miercoles'];
    $jueves = $data['horario-jueves'];
    $viernes = $data['horario-viernes'];
    $sabado = $data['horario-sabado'];
    $domingo = $data['horario-domingo'];


    $respuesta=[
      'lunes' => $lunes,
      'martes' => $martes,
      'miercoles' => $miercoles,
      'jueves' => $jueves,
      'viernes' => $viernes,
      'sabado' => $sabado,
      'domingo' => $domingo,
    ];
    
    return $respuesta;
  }
}
