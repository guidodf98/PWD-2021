<?php
include_once "../views/utilities/functions.php";

class CalculoCineControl {
  function calcular() {
    $data = data_submitted();

    $edad = $data['edad'];

    if (array_key_exists('estudia', $data) && $edad >= 12) {
      $precio = 180;
    } elseif (array_key_exists('estudia', $data) || $edad < 12) {
      $precio = 160;
    } else {
      $precio = 300;
    }

    return $precio;
  }
}
