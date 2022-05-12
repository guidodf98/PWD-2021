<?php

include_once "../configuracion.php";


if (isset($_SESSION['activa'])) { // Usar el metodo de la clase session
//Recupero los usuarios y el usuario actual
$controlUsuario = new AbmUsuario();

$usuarios = $controlUsuario->buscar(null);
$condicion['idusuario'] = $_SESSION['idusuario']; // Usar el metodo de la clase session
$usuario = $controlUsuario->buscar($condicion)[0];


$control = new GenerarCertificadoControl();
$control->generarQR("http://localhost/TP6-PWD/view/validarCertificado.php?id={$usuario->getIdUsuario()}");
// Usar md5 por url

//////// GENERACION PDF //////////
$pdf = new PDF();
$pdf->AliasNbPages(); // Numero de paginas para el footer
$pdf->AddPage();

// Titulo
$pdf->SetFont('Courier', 'U', 20);
$pdf->Cell(0, 0, "Certificado de alumno regular", 0, 0, 'C');

// Texto principal
$pdf->SetXY(25, 85);
$pdf->SetFont('Courier', '', 12);
$pdf->MultiCell(160, 10, $control->registrarCertificado($usuario), 1, 'J', 0);


// QR de validacion
$pdf->Ln(20);
$pdf->SetX(25);
$pdf->MultiCell(0, 10, "Escanear el codigo QR para \nverificar si el certificado \nes valido:", 0, '', 0);
$pdf->Image('temp/qr.png', 110, 175);


// Pagina nueva
$pdf->AddPage();

// Tabla de usuarios
$pdf->Cell(90, 10, 'Nombre de usuario', 1, 0, 'C', 0);
$pdf->Cell(90, 10, 'Correo electronico', 1, 1, 'C', 0);

foreach ($usuarios as $usuario) {
  $pdf->Cell(90, 10, $usuario->getUsNombre(), 1, 0, 'C', 0);
  $pdf->Cell(90, 10, $usuario->getUsMail(), 1, 1, 'C', 0);
}
$pdf->Ln();


$nombrePdf = "certificado_usuario_{$usuario->getUsnombre()}.pdf";
$pdf->Output('', $nombrePdf); // 'D' para descargar al click, '' para solo abrir



} else { ?>
  <div class="container d-flex justify-content-center align-items-start text-center mt-5">
    <div class="alert alert-danger mt-20vh" role="alert">
      <h4 class="alert-heading">Esta pagina es solo para usuarios registrados</h4>
    </div>
  </div>
<?php } ?>