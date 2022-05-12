<?php
include_once "../views/utilities/functions.php";

class CinemasImagenControl {
  public function infoPelicula() {

    $dir = 'archives/'; // Directorio donde se guardan los archivos
    $data = data_submitted();

    $respuesta['error'] = '';
    $respuesta['link'] = '';
    $continua = true;

    // Comprobamos que la subida no tenga errores
    if ($continua && $_FILES['imagen']['error'] > 0) {
      $respuesta['error'] = "[ ERROR ] No se pudo cargar el archivo";
      $continua = false;
    }

    // Comprobamos que el tipo de archivo sea de una imagen
    if ($continua && strpos($_FILES['imagen']['type'], 'image') != false) { // el strpos se compara con false y no se niega para evitar un error. Si el valor que se busca esta en la primer posicion, retorna 0 y se toma como falso
      $respuesta['error'] = "[ ERROR ] El tipo de archivo es incompatible";
      $continua = false;
    }

    // Copiamos el archivo temporal y lo guardamos en un directorio especificado anteriormente
    if ($continua && !copy($_FILES['imagen']['tmp_name'], $dir . $_FILES['imagen']['name'])) {
      $respuesta['error'] = "[ ERROR ] No se pudo obtener la informacion del archivo";
    } else {
      $nombreArchivo = str_replace(' ', '%20', $_FILES['imagen']['name']);// Reemplazo los espacios por %20 para que se pueda acceder por link
      $respuesta['link'] = $dir . $nombreArchivo;
    }



    $respuesta['content'] =
      "<p>Titulo: {$data['titulo']}</p>" .
      "<p>Actores: {$data['actores']}</p>" .
      "<p>Director: {$data['director']}</p>" .
      "<p>Guión: {$data['guion']}</p>" .
      "<p>Producción: {$data['producion']}</p>" .
      "<p>Año: {$data['anio']}</p>" .
      "<p>Nacionalidad: {$data['nacionalidad']}</p>" .
      "<p>Género: {$data['genero']}</p>" .
      "<p>Duración: {$data['duracion']}</p>" .
      "<p>Restricciones de edad: {$data['res-edad']}</p>" .
      "<p>Sinopsis: {$data['sinopsis']}</p>";

    return $respuesta;
  }
}
