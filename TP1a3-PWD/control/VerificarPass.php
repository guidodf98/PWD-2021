<?php
include_once '../views/utilities/functions.php';
include_once '../views/data/accounts.php';

class VerificarPass {

  public function verificar() {
    $cuentaValida = false;
    $data = data_submitted();

    $i = 0;
    while ($i < count($GLOBALS['accounts']) && $GLOBALS['accounts'][$i]['username'] != $data['username']) {
      $i++;
    }

    if ($i != count($GLOBALS['accounts']) && $GLOBALS['accounts'][$i]['username'] == $data['username']) {
      if ($GLOBALS['accounts'][$i]['password'] == $data['password']) {
        $cuentaValida = true;
      }
    }

    return $cuentaValida;
  }
}
