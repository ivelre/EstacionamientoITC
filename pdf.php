<?php 
    session_start();
    require_once("dompdf_config.inc.php");
    $html = '<!DOCTYPE html>
    <html>
    <head>
    	<title></title>
    	<link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    	<link href="/bootstrap/css/estilos.css" rel="stylesheet">
    </head>
    <body>
    ' . $_REQUEST['codigo'] .'
    </body>
    </html>';
    $dompdf = new DOMPDF();
    $dompdf->load_html($html);
    $dompdf->render();
    $dompdf->stream("Mi instrumento.pdf", array("Attachment" => 0));
 ?>