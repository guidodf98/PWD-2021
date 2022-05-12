<?php $title = 'FPDF';
include_once './includes/head.php' ?>
<?php
$urlImagen = "./img/logo2.gif";
$tituloNavbar = "Documentacion de FPDF";
include_once './includes/nav.php' ?>
<div class="contenido-principal col my-3  ms-5 ps-0 "style="margin-right: 20%;">
    <!-- Descarga -->
    <h3 id="descarga">Descarga</h3>
    <p>Para descargar FPDF, ingresar al <a target="_blank" href="http://www.fpdf.org/" class="color-orange"> sitio web oficial</a> y dirigirse a la seccion de "Descargas". Se recomienda elegir la ultima version.</p>
    <!-- Instalacion -->
    <h3 id="instalacion" class="mt-4">Instalacion</h3>
    <p>Descomprimir el archivo descargado en una nueva carpeta e incorporarla al proyecto deseado. </p>
    <!-- Configurar -->
    <h3 id="configurar" class="mt-4">Configurar</h3>
    Para comenzar a trabajar con la libreria, es necesario extender a la clase padre (FPDF) para poder personalizarla. <br>
    Incluir la libreria en el archivo donde se desea extender a la clase <span class="active fw-500">FPDF</span>, adaptando la clase a la necesidad de cada proyecto. <br> <small>/NOMBRE_CARPETA/fpdf.php</small>, siendo el nombre de la carpeta aquel que seleccionaron al extraer el .zip</p>
    <!-- Ejemplo -->
    <h4 class="mt-4">Ejemplo</h4>
    Este seria un ejemplo de como queda la clase extendida. <br>
    Las funciones <kbd>Header()</kbd> y <kbd>Footer()</kbd> se pueden modificar segun la necesidad del usuario</p>
    <img src="./img/ejemplo1.png" alt="Ejemplo de Extension">
    <!-- Uso -->
    <h3 class="mt-4" id="primeros-pasos">Primeros Pasos</h3>
    <p class="mt-4">Crear un archivo en la carpeta "Vista", donde se generaria el PDF. En este archivo, incluir la clase creada anteriormente y crear un objeto de la misma. Luego, añadir una página con la funcion <kbd>AddPage()</kbd></p>
    <img src="./img/creacionObj" alt="Inclusion de Libreria y Creacion del Objeto">
    <p class="mt-4">Para poder "imprimir" texto, antes debemos escoger una fuente con la funcion <kbd>SetFont()</kbd>. Luego, debemos crear/imprimir una "celda" con la funcion <kbd>Cell()</kbd>. Una celda es una superficie rectangular, con borde si se quiere, que contiene texto. Esta misma se imprime en la posicion actual (la posicion por defecto se encuentra en la parte superior izquierda del archivo).<br>
        Ver la <a class="color-orange" target="_blank" href="http://fpdf.org/en/doc/cell.htm">documentacion oficial</a> sobre la funcion Cell. <br>
        Luego de crear la celda, agregamos un salto de linea con la funcion <kbd>Ln()</kbd> para desplazar la posicion actual. Esta funcion recibe por parametro el numero de unidades que se desplazara hacia abajo la posicion. <br>
        Finalmente, el documento se cierra y se envía al navegador con <kbd>Output()</kbd>
    </p>
    <img src="./img/completo" alt="Funcionalidad completa de FPDF">
    <!-- Otros Metodos -->
    <h3 class="mt-4" id="otros-metodos">Otros Metodos</h3>
    <ul>
        <li><kbd class="me-3">$pdf->Image(DIRECTORIO_DE_LA_IMAGEN, POSICION_X, POSICION_Y);</kbd>Sirve para imprimir una imagen</li>
        <li><kbd class="me-3">$pdf->MultiCell(ANCHO_DE_CELDA, ESPACIO_ENTRE_RENGLONES, TEXTO, BORDE(1 o 0), ALINEADO, RELLENO);</kbd>Sirve para imprimir multiples celdas o para aplicar parrafos con saltos de linea</li>
        <li><kbd class="me-3">$pdf->SetXY(POSICION_X, POSICION_Y);</kbd>Posiciona el puntero virtual en las coordenadas dadas</li>
        <li><kbd class="me-3">$pdf->AliasNbPages();</kbd>Sirve para contabilizar el numero de paginas del PDF (es necesarsio para que el footer imprima el total de las paginas.</li>
    </ul>
    <p>Para ver los otros metodos, ingresar al <a target="_blank" href="http://www.fpdf.org/" class="color-orange"> sitio web oficial</a> y dirigirse a la seccion de "Manual".</p>
</div>
</div>
</div>

</body>