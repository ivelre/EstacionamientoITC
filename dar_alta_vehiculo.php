<?php 
	include('smarty/libs/Smarty.class.php');
	$titulo = "ITC | Caracteristicas vehiculo";
	$html = new Smarty;
	$html -> Assign("titulo",$titulo);
	$html -> display("dar_alta.tpl");
 ?>