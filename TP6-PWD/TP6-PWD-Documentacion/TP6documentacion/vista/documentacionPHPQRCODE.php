<?php $title = 'PHPQRCODE';
include_once './includes/head.php' ?>
<?php
$urlImagen = "./img/logoQR.png";
$tituloNavbar = "Documentacion de PHPQRCODE";
include_once './includes/nav.php' ?>
<div class="contenido-principal col my-3  ms-5 ps-0 " style="margin-right: 20%;">
    <!-- Descarga -->
    <h3 id="descarga">Descarga</h3>
    <p>Para descargar PHP QR Code, ingresar a la <a target="_blank" href="https://sourceforge.net/projects/phpqrcode/files/" class="color-orange"> seccion de descargas</a> del sitio web oficial. Se recomienda elegir la ultima version.</p>
    <!-- Instalacion -->
    <h3 id="instalacion" class="mt-4">Instalacion</h3>
    <p>Descomprimir el archivo descargado en una nueva carpeta e incorporarla al proyecto deseado. </p>
    <!-- Configurar -->
    <h3 id="configurar" class="mt-4">Configurar</h3>
    <p>La libreria no necesita configuracion para comenzar a trabajar con ella, simplemente se incluye un script "qrlib.php" en el archivo donde se desea trabajar con la libreria.</p>
    <img src="./img/include_qrlib" alt="Include QRLIB">
    <!-- Uso -->
    <h3 class="mt-4" id="primeros-pasos">Primeros Pasos</h3>
    <p class="mt-4">Se llama a la clase QRCode, el cual tiene un metodo llamado <kbd>png()</kbd>. Este ultimo es el que, a traves de parametros enviados, genera el codigo QR.</p>
    <img src="./img/llamado_func_qr" alt="Inclusion de Libreria y Creacion del Objeto">
    <p class="mt-4">
        <kbd>$contenido</kbd> -> Texto principal<br>
        <kbd>$filename</kbd> -> Direccion donde se almacena la imagen generada<br>
        <kbd>$lavel</kbd> -> Calidad del codigo QR<br>
        <kbd>$tamanio</kbd> -> Tamaño del codigo QR<br>
        <kbd>$frame</kbd> -> Tamaño del marco<br>
        Con este paso, se crea el codigo QR y es enviado a la direccion ingresada por parametro
    </p>
    <!-- Mas informacion -->
    <h3 class="mt-4" id="mas-documentacion">Mas Documentacion</h3>
    <p>Para ver mas documentacion acerca de PHP QR Code, ingresar al <a target="_blank" href="http://phpqrcode.sourceforge.net/" class="color-orange"> sitio web oficial</a>.</p>
</div>
</div>
</div>

</body>