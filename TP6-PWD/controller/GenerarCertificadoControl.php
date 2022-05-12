<?php include_once "../configuracion.php" ?>

<?php
class GenerarCertificadoControl {
  function generarQR($contenido) {
    $dir = 'temp/';

    if (!file_exists($dir)) {
      mkdir($dir);
    }

    $filename = $dir . 'qr.png';

    $tamanio = 7;
    $level = 'M'; // Precision del codigo
    $frameSize = 1; // Margen

    QRcode::png($contenido, $filename, $level, $tamanio, $frameSize);
  }

  function registrarCertificado($usuario) {
    $fecha = fecha();
    $fechaVencimiento = fecha(90);

    $this->registrarFechaVencimiento($fechaVencimiento, $usuario);

    $text = "FACULTAD DE INFORMATICA certifica que el alumno {$usuario->getUsNombre()} con legajo {$usuario->getIdUsuario()}, MAIL {$usuario->getUsMail()}, se encuentra regular en la carrera de TECNICATURA UNIVERSITARIA EN DESARROLLO WEB, plan 0885.\n\n    Emitido: {$fecha} \nVencimiento: {$fechaVencimiento}";

    return $text;
  }

  function registrarFechaVencimiento($fechaVencimiento, $usuario) {
    $abmUsuario = new AbmUsuario();
    $usuario->setUsVencimientoCertificado($fechaVencimiento);

    $datos = [
      'idusuario' => $usuario->getIdUsuario(),
      'usnombre' => $usuario->getUsNombre(),
      'uspass' => $usuario->getUsPass(),
      'usmail' => $usuario->getUsMail(),
      'usdeshabilitado' => $usuario->getUsDeshabilitado(),
      'usvencimientocertificado' => $fechaVencimiento,
    ];
    // var_dump($datos);
    $abmUsuario->modificacion($datos);
  }
}
