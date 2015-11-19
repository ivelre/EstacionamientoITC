<?php 
	include('smarty/libs/Smarty.class.php');
	$titulo = "ITC | Nuevo registro";
	$html = new Smarty;
	$html -> Assign("titulo",$titulo);
	$html -> display("dar_alta.tpl");
 ?>