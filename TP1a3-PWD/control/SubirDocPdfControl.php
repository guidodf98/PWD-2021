<?php

class SubirDocPdfControl {

  public function subirArchivo() {

    $dir = 'archives/'; // Directorio donde se guardan los archivos

    $respuesta['error'] = '';
    $respuesta['link'] = '';

    $continua = true;

    // Comprobamos que la subida no tenga errores
    if ($continua && $_FILES['archivo']['error'] > 0) {
      $respuesta['error'] = "[ ERROR ] No se pudo cargar el archivo";
      $continua = false;
    }

    // Comprobamos que el archivo no supere los 2MB
    if ($continua && $_FILES['archivo']['size'] / 1024 > 2000) {
      $respuesta['error'] = "[ ERROR ] El tamaño del archivo es mayor de 2MB";
      $continua = false;
    }

    // Comprobamos que el tipo de archivo sea pdf o doc
    if ($continua && strpos($_FILES['archivo']['type'], 'pdf') != false && strpos($_FILES['archivo']['type'], 'doc') != false) { // el strpos se compara con false y no se niega para evitar un error. Si el valor que se busca esta en la primer posicion, retorna 0 y se toma como falso
      $respuesta['error'] = "[ ERROR ] El tipo de archivo es incompatible";
      $continua = false;
    }

    // Copiamos el archivo temporal y lo guardamos en un directorio especificado anteriormente
    if ($continua && !copy($_FILES['archivo']['tmp_name'], $dir . $_FILES['archivo']['name'])) {
      $respuesta['error'] = "[ ERROR ] No se pudo obtener la informacion del archivo";

    } else {
      $nombreArchivo = str_replace(' ', '%20', $_FILES['archivo']['name']);// Reemplazo los espacios por %20 para que se pueda acceder por link
      $respuesta['link'] = $dir . $nombreArchivo;
    }

    return $respuesta;
  }
}
