<?php
include_once "../configuracion.php";

header("Status: 301 Moved Permanently");
header("Location: " . $LOGIN);

$control = new LoginControl();
$sesion = $control->deslogear();

exit;
