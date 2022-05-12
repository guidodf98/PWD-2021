<?php $title = 'PHPQRCODE';
include_once './includes/head.php' ?>
<?php
$urlImagen = "./img/logoQR.png";
$tituloNavbar = "Documentacion de PHPQRCODE";
include_once './includes/nav.php' ?>
<div class="col my-3  ms-5 ps-0">
    <h3>PHP QR Code</h3>
    <h4>Que es PHP QR Code?</h4>
    <p>
        PHP QR Code es una libreria de codigo abierto para generar codigo QR, codigo de barra bidimensionales. Basados en la biblioteca libqrencode de C, proporsiona API para crear imagenes de codigo de barra QR (PNG, JPEG gracias a GD2). Implementado puramente en PHP, sin dependencias externas (excepto por GD2, si es necesaria). <br> Algunas de las características de la libreria:
    </p>
    <ul>
        <li>Soporta codigo QR de las versiones (tamaño) 1-40</li>
        <li>Codificación numérica, alfanumérica, de 8 bits y kanji. (La codificación kanji no se probó por completo)</li>
        <li>Implementado puramente en PHP, sin dependencias externas (excepto por GD2)</li>
        <li>Exporta a PNG, JPEG. Tambien exporta como tabla de bits</li>
        <li>Integracion de API de codigo de barras</li>
        <li>Facil de configurar</li>
        <li>Cache de dato para acelerar calculos</li>
        <li>100% codigo abierto</li>

    </ul>
</div>
</div>
</div>

<!-- PHP QR Code is open source (LGPL) library for generating QR Code, 2-dimensional barcode. Based on libqrencode C library, provides API for creating QR Code barcode images (PNG, JPEG thanks to GD2). Implemented purely in PHP, with no external dependencies (except GD2 if needed).

Some of library features includes:

Supports QR Code versions (size) 1-40
Numeric, Alphanumeric, 8-bit and Kanji encoding. (Kanji encoding was not fully tested, if you are japan-encoding enabled you can contribute by verifing it :) )
Implemented purely in PHP, no external dependencies except GD2
Exports to PNG, JPEG images, also exports as bit-table
TCPDF 2-D barcode API integration
Easy to configure
Data cache for calculation speed-up
Provided merge tool helps deploy library as a one big dependency-less file, simple to "include and do not wory"
Debug data dump, error logging, time benchmarking
API documentation
Detailed examples
100% Open Source, LGPL Licensed -->