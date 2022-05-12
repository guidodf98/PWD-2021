<?php
include_once "../util/fpdf183/fpdf.php";

class PDF extends FPDF {
  function Header() {
    $this->Image('img/logo-fai-texto.png', 55, 10, 100); // Logo, posicion y ancho
    $this->Ln(65); // Line breack de 65 para dar espacio al logo
  }

  function Footer() {
    $this->SetY(-15); // Y -15, para valores negativos, se posiviona del lado contrario de la hoja
    $this->SetFont('Arial', 'I', 8);
    $this->Cell(0, 10, 'Page ' . $this->PageNo() . '/{nb}', 0, 0, 'C'); // Numeracion de paginas
  }

}
