<?php 
	include('smarty/libs/Smarty.class.php');
	$titulo = "ITC | Editar a ";
	include('/adodb/adodb.inc.php');
	$i=0;
	$datos[0][0]=0;
	$DB = NewADOConnection('mysqli');
	$DB->Connect('localhost', 'root', '', 'estacionamiento');
	$ADODB_FETCH_MODE = ADODB_FETCH_NUM;
	$rs = $DB->Execute("select * from usuario where iduser=" . $_REQUEST['id']);
	//var_dump($rs);
	$datos['id']=$rs->fields['0'];
	$datos['nombre']=$rs->fields['1'];
	$datos['apaterno']=$rs->fields['2'];
	$datos['amaterno']=$rs->fields['3'];
	$datos['domicilio']=$rs->fields['4'];
	$datos['telefono']=$rs->fields['5'];
	$datos['tipo_usuario']=$rs->fields['6'];
	$datos['licencia']=$rs->fields['7'];
	$datos['tcirculacion']=$rs->fields['8'];

	$ADODB_FETCH_MODE = ADODB_FETCH_NUM;
	$rs = $DB->Execute("select * from vehiculo where iduser = " . $_REQUEST['id']);
	foreach($rs as $k => $row) {
		$datos_auto[$i]['id']=$row[0];
		$datos_auto[$i]['iduser']=$row[1];
		$datos_auto[$i]['marca']=$row[2];
		$datos_auto[$i]['modelo']=$row[3];
		$datos_auto[$i]['transmision']=$row[4];
		$datos_auto[$i]['placas']=$row[5];
		$datos_auto[$i]['color']=$row[6];
		$datos_auto[$i]['ano']=$row[7];
		$caracteristica = explode(" ", $row[8]);
		$datos_auto[$i]['caracteristicas_1']= "false";
		$datos_auto[$i]['caracteristicas_2']= "false";
		$datos_auto[$i]['caracteristicas_3']= "false";
		$datos_auto[$i]['caracteristicas_4']= "false";
		$datos_auto[$i]['caracteristicas_5']= "false";
		$datos_auto[$i]['caracteristicas_6']= "false";
		foreach ($caracteristica as $clave => $valor){
			switch ($clave) {
				case 0:
					$datos_auto[$i]['caracteristicas_1']= "true";
					break;
				case 1:
					$datos_auto[$i]['caracteristicas_2']= "true";
					break;
				case 2:
					$datos_auto[$i]['caracteristicas_3']= "true";
					break;
				case 3:
					$datos_auto[$i]['caracteristicas_4']= "true";
					break;
				case 4:
					$datos_auto[$i]['caracteristicas_5']= "true";
					break;
				case 5:
					$datos_auto[$i]['caracteristicas_6']= "true";
					break;
				
			}
		}
		$datos_auto[$i]['observaciones']=$row[9];
		$i++;
	}

	$html = new Smarty;
	$html -> Assign("titulo",$titulo);
	$html -> Assign("datos", $datos);
	$html -> Assign("datos_auto", $datos_auto);
	$html -> display("Editar.tpl");
 ?>