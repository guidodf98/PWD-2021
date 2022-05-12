<?php header('Content-Type: text/html; charset=utf-8');
header("Cache-Control: no-cache, must-revalidate ");

/////////////////////////////
// CONFIGURACION APP//
/////////////////////////////

$PROYECTO = 'TP6-PWD';

//variable que almacena el directorio del proyecto
$ROOT = $_SERVER['DOCUMENT_ROOT'] . "/$PROYECTO/";

include_once($ROOT . 'controller/AbmRol.php');
include_once($ROOT . 'controller/AbmUsuario.php');
include_once($ROOT . 'controller/AbmUsuarioRol.php');
include_once($ROOT . 'controller/LoginControl.php');
include_once($ROOT . 'controller/Session.php');
include_once($ROOT . 'controller/ListarUsuariosControl.php');
include_once($ROOT . 'controller/ActualizarLoginControl.php');
include_once($ROOT . 'controller/PDF.php');
include_once($ROOT . 'controller/GenerarCertificadoControl.php');
include_once($ROOT . 'controller/ValidarCertificadoControl.php');
include_once($ROOT . 'util/funciones.php');
include_once($ROOT . 'util/phpqrcode/qrlib.php');

$sesion = new Session();


$INICIO = "http://" . $_SERVER['HTTP_HOST'] . "/$PROYECTO/view/home.php";
$LOGIN = "http://" . $_SERVER['HTTP_HOST'] . "/$PROYECTO/view/login.php";


$_SESSION['ROOT'] = $ROOT;
