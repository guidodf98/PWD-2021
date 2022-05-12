<?php
include_once "../views/utilities/functions.php";

class CinemasControl {
  public function infoPelicula() {

    $data = data_submitted();

    $respuesta =
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
