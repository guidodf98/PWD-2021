<?php include_once "../configuracion.php" ?>
<?php

include_once "../util/funciones.php";


class ValidarCertificadoControl {

  function validar() {
    $data = data_submitted();
    $error = '';

    $abmUsuario = new AbmUsuario();
    $condicion['idusuario'] = $data['id'];

    if (!$usuarios = $abmUsuario->buscar($condicion)) {
      $error = "No existe el usuario";
    }

    $usuario = $usuarios[0];
    if (!$error && $usuario->getUsDeshabilitado()) {
      $error = "El usuario está dado de baja";
    }

    if (!$error && !$usuario->getUsVencimientoCertificado()) {
      $error = "El usuario no emitió ningun certificado";
    } else {
      if (!$usuario->getUsVencimientoCertificado() > fecha()) {
        $error = "El certificado se encuentra vencido";
      }
    }

    return $error;
  }
}
