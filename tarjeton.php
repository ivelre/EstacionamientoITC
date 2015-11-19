<?php 
	include('smarty/libs/Smarty.class.php');
	include('/adodb/adodb.inc.php');
	$titulo = "ITC | Tarjeton de ";
	$i=0;
	$datos[0][0]=0;
	$DB = NewADOConnection('mysqli');
	$DB->Connect('localhost', 'root', '', 'estacionamiento');
	$ADODB_FETCH_MODE = ADODB_FETCH_NUM;
	$rs = $DB->Execute("select iduser, nombre, apaterno, amaterno, tipo_usuario, licencia, foto from usuario where iduser=" . $_REQUEST['id']);
	//var_dump($rs);
	$datos['id']=$rs->fields['0'];
	$datos['nombre']=$rs->fields['1'];
	$datos['apaterno']=$rs->fields['2'];
	$datos['amaterno']=$rs->fields['3'];
	$datos['tipo_usuario']=$rs->fields['4'];
	$datos['licencia']=$rs->fields['5'];

	$ADODB_FETCH_MODE = ADODB_FETCH_NUM;
	$rs = $DB->Execute("select idvehiculo , marca, modelo, color, placas from vehiculo where iduser=" . $_REQUEST['id']);
	foreach($rs as $k => $row) {
		$datos_auto[$i]['id']=$row[0];
		$datos_auto[$i]['marca']=$row[1];
		$datos_auto[$i]['modelo']=$row[2];
		$datos_auto[$i]['placas']=$row[4];
		$datos_auto[$i]['color']=$row[3];
		$i++;
	}
	$i=0;
	foreach($datos_auto as $k => $dato_auto) {
		$codigo[$i]['codigo'] ='
				<div class="margen">
					<div class="imag">
				</div>
				<br>
				<h2>Propietario</h2>
				<h3>Nombre:</h3>
				<p>' . $datos['nombre'] . ' ' . $datos['apaterno'] . ' '. $datos['amaterno'] . '</p>
				<h3>Tipo de propietario:</h3><p>';
		if($datos['tipo_usuario']==1) $codigo[$i]['codigo'] .='Alumno';
		if($datos['tipo_usuario']==2) $codigo[$i]['codigo'] .='Profesor';
		if($datos['tipo_usuario']==3) $codigo[$i]['codigo'] .='Administrativo';
		$codigo[$i]['codigo'] .= '</p><h3>Licencia:</h3>
				<p>' . $datos['licencia'] .'</p>
				<hr>
				<h2>Vehiculo</h2>
				<h3>Marca:</h3>
				<p>' . $datos_auto[$i]['marca'] . '</p>
				<h3>Modelo:</h3>
				<p>' . $datos_auto[$i]['modelo'] . '</p>
				<h3>Placas:</h3>
				<p>' . $datos_auto[$i]['placas'] . '</p>
				<h3>color:</h3>
				<p>' . $datos_auto[$i]['color'] . '</p>';
				$i++;
	}
	$i=0;
	foreach ($datos_auto as $key => $value) {
		$codigo[$i]['codigo'] = '<form method="post" action="pdf.php?" id="cod">
							<textarea name="codigo" class="validacion"  form="cod" placeholder="codigo" required/>' . $codigo[$i]['codigo'] . '</textarea><br>
		 					<input type="submit" value="Imprimir" id="icon">
		 				</form>' . $codigo[$i]['codigo'];
		 				$i++;
	}
	$html = new Smarty;
	$html -> Assign("titulo",$titulo);
	$html -> Assign("datos", $datos);
	$html -> Assign("datos_auto", $datos_auto);
	$html -> Assign("codigo", $codigo);
	$html -> display("tarjeton.tpl");
 ?>