<?php
include_once "../views/utilities/functions.php";

class CalculadoraControl {
  function saludar() {
    $data = data_submitted();

    $num1 = $data['num-1'];
    $num2 = $data['num-2'];
    $op = $data['operacion'];


    switch ($op) {
      case 'suma':
        $mensaje = $num1 . "+" . $num2 . " = " . $num1 + $num2;
        break;
      case 'resta':
        $mensaje = $num1 . "-" . $num2 . " = " . $num1 - $num2;
        break;
      case 'multiplicacion':
        $mensaje = $num1 . "*" . $num2 . " = " . $num1 * $num2;
        break;
      case 'division':
        if ($num2 == 0) {
          $mensaje = "No se puede dividir por 0";
        } else {
          $mensaje = $num1 . "/" . $num2 . " = " . $num1 / $num2;
        }
        break;
      case 'potencia':
        $mensaje = $num1 . "^" . $num2 . " = " . $num1 ** $num2;
        break;
      case 'resto':
        $mensaje = $num1 . "%" . $num2 . " = " . $num1 % $num2;
        break;
      default:
        $mensaje = "El operador logico no es valido";
        break;
    }

    return $mensaje;
  }
}
