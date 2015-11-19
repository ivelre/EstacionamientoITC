
<?php
class acciones {
	include('/adodb/adodb.inc.php');
	$DB = NewADOConnection('mysqli');
	$DB->Connect('localhost', 'root', '', 'estacionamiento');

    function registrar_usuario($nombre, $apaterno,$amaterno, $domicilio, $telefono, $tipo_usuario, $licencia, $tcirculacion, $foto) {
        $rs = $this->$DB->Execute("insert into usuario(nombre, apaterno, amaterno, domicilio, telefono, tipo_usuario, licencia, tcirculacion, foto) 
					values ('". $nombre ."', '". $apaterno ."', '". $amaterno ."', '". $domicilio ."', ". $telefono .", '". $tipo_usuario ."', '". $licencia ."', '". $tcirculacion ."', '". $foto ."') ");
    }
}
?>
