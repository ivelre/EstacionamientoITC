<?php 
	include('smarty/libs/Smarty.class.php');
	$titulo = "ITC | Lista de propietarios";
	include('/adodb/adodb.inc.php');
	$i=0;
	$datos[0][0]=0;
	$DB = NewADOConnection('mysqli');
	$DB->Connect('localhost', 'root', '', 'estacionamiento');
	$ADODB_FETCH_MODE = ADODB_FETCH_NUM;
	$rs = $DB->Execute("select iduser, nombre, apaterno, amaterno, foto, tipo_usuario from usuario");
	foreach($rs as $k => $row) {
		$datos[$i]['id']=$row[0];
		$datos[$i]['nombre']=$row[1];
		$datos[$i]['apaterno']=$row[2];
		$datos[$i]['amaterno']=$row[3];
		$datos[$i]['foto']=$row[4];
		$datos[$i]['tipo_usuario']=$row[5];
		$i++;
	}
	$html = new Smarty;
	$html -> Assign("titulo",$titulo);
	$html -> Assign("datos",$datos);
	$html -> display("propietarios.tpl");
 ?>