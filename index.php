<?php 
	include('smarty/libs/Smarty.class.php');
	$rutas[0]["url"] = "home.php";
	$rutas[0]["categoria"] = "inicio";
	$titulo = "ITC | |Estacionamiento escolar";
	$html = new Smarty;
	$html-> Assign("rutas",$rutas);
	$html-> Assign("titulo",$titulo);
	$html->display("home.tpl");
 ?>