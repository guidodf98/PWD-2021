<?php

class SubirTxtControl {

  public function subirArchivo() {
    $dir = 'archives/'; // Directorio donde se guardan los archivos

    $respuesta['error'] = '';
    $respuesta['content'] = '';
    $continua = true;

    // Comprobamos que la subida no tenga errores
    if ($continua && $_FILES['archivo']['error'] > 0) {
      $respuesta['error'] = "[ ERROR ] No se pudo cargar el archivo";
      $continua = false;
    }

    // Comprobamos que el tipo de archivo sea txt
    if ($continua && strpos($_FILES['archivo']['type'], 'text/plain') != false) { // el strpos se compara con false y no se niega para evitar un error. Si el valor que se busca esta en la primer posicion, retorna 0 y se toma como falso
      $respuesta['error'] = "[ ERROR ] El tipo de archivo es incompatible";
      $continua = false;
    }

    // Copiamos el archivo temporal y lo guardamos en un directorio especificado anteriormente
    if ($continua && !copy($_FILES['archivo']['tmp_name'], $dir . $_FILES['archivo']['name'])) {
      $respuesta['error'] = "[ ERROR ] No se pudo obtener la informacion del archivo";
    } else {
      $respuesta['content'] = file("archives/{$_FILES['archivo']['name']}");
    }

    return $respuesta;
  }
}
