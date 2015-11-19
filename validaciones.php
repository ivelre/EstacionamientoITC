<?php 
	include('/adodb/adodb.inc.php');
	include('/adodb/adodb.inc.php');
	$DB = NewADOConnection('mysqli');
	$DB->Connect('localhost', 'root', '', 'estacionamiento');
define('DB_MAIN', 'localhost|root||estacionamiento');

class my_db{

    private static $databases;
    private $connection;

    public function __construct($connDetails){
        if(!is_object(self::$databases[$connDetails])){
            list($host, $user, $pass, $dbname) = explode('|', $connDetails);
            $dsn = "mysql:host=$host;dbname=$dbname";
            self::$databases[$connDetails] = new PDO($dsn, $user, $pass);
        }
        $this->connection = self::$databases[$connDetails];
    }
   
    public function fetchAll($sql){
        $args = func_get_args();
        array_shift($args);
        $statement = $this->connection->prepare($sql);
        $statement->execute($args);
         return $statement->fetchAll(PDO::FETCH_OBJ);
    }
}

	//$DB = NewADOConnection('mysqli');
	//$DB->Connect('localhost', 'root', '', 'estacionamiento');

    function registrar_usuario($nombre, $apaterno, $amaterno, $domicilio, $telefono, $tipo_usuario, $licencia, $tcirculacion, $foto) {
      $db = new my_db(DB_MAIN);
			$rows = $db->fetchAll("insert into usuario(nombre, apaterno, amaterno, domicilio, telefono, tipo_usuario, licencia, tcirculacion, foto) 
					values ('". $nombre ."', '". $apaterno ."', '". $amaterno ."', '". $domicilio ."', ". $telefono .", '". $tipo_usuario ."', '". $licencia ."', '". $tcirculacion ."', '". $foto ."') ");
    }

    function registrar_vehiculo($iduser, $marca, $modelo, $transmision, $placas, $color, $ano, $caracteristicas, $observaciones) {
			$db = new my_db(DB_MAIN);
			$rows = $db->fetchAll("insert into vehiculo values(null,
			".$iduser.", '".$marca."', '".$modelo."', '".$transmision."', '".$placas."', '".$color."', ".$ano.", '".$caracteristicas."', '".$observaciones."') ");
    }

    function max_user(){
    	// global $DB;
    		$DB = NewADOConnection('mysqli');
				$DB->Connect('localhost', 'root', '', 'estacionamiento');
    	$ADODB_FETCH_MODE = ADODB_FETCH_NUM;
    	$rs=$DB->Execute("select MAX(iduser) AS id FROM usuario");
    	$response = $rs->fields['id'];
    	$DB->close();
			return $response;
    }

    if(getR('fn') == 'remove') {
    	$id = getR('id');

    	$response = new stdClass;
    	$response->success = true;

    	$DB->Execute("delete FROM vehiculo WHERE iduser=".getR('id'));
    	$DB->Execute("delete FROM usuario WHERE iduser=".getR('id'));
    // if(no puedo borrar usuario)
    	// $response->success = false;
    	// $response->reason = "No se encuentra. pe.";

    	return json_encode($response);
    }

	switch ($_REQUEST['validacion']) {
		case '1':
		//registro de usuario
				registrar_usuario(getR('nombre'), getR('apaterno'), getR('amaterno'), 
													getR('domicilio'), getR('telefono'), getR('tipo_usuario'), 
													getR('licencia'), getR('tcirculacion'), "/" );
		//registro de vehiculo
				$iduser=max_user();

				$marca = getR('marca');
				$modelo = getR('modelo');
				$transmision = getR('transmision');
				$placas = getR('placas');
				$color = getR('color');
				$ano = getR('ano');
				if(isset($_REQUEST['seguro'])) {$caracteristicas = getR('seguro') . ' ';}
				if(isset($_REQUEST['ac']))$caracteristicas .= getR('ac') . ' ';
				if(isset($_REQUEST['estereo']))$caracteristicas .= getR('estereo') . ' ';
				if(isset($_REQUEST['ba']))$caracteristicas .= getR('ba') . ' ';
				if(isset($_REQUEST['frenos']))$caracteristicas .= getR('frenos') . ' ';
				if(isset($_REQUEST['birlos']))$caracteristicas .= getR('birlos');
				$observaciones = getR('observaciones');

				registrar_vehiculo($iduser, $marca, $modelo, $transmision, $placas, $color, $ano, $caracteristicas, $observaciones);

				if(getR('vehiculo_2') == '1') {
					// Agregamos un segundo vehiculo
					$marca = getR('marca_2');
					$modelo = getR('modelo_2');
					$transmision = getR('transmision_2');
					$placas = getR('placas_2');
					$color = getR('color_2');
					$ano = getR('ano_2');
					$caracteristicas = "";
					if(isset($_REQUEST['seguro_2'])) {$caracteristicas = getR('seguro_2') . ' ';}
					if(isset($_REQUEST['ac_2']))$caracteristicas .= getR('ac_2') . ' ';
					if(isset($_REQUEST['estereo_2']))$caracteristicas .= getR('estereo_2') . ' ';
					if(isset($_REQUEST['ba_2']))$caracteristicas .= getR('ba_2') . ' ';
					if(isset($_REQUEST['frenos_2']))$caracteristicas .= getR('frenos_2') . ' ';
					if(isset($_REQUEST['birlos_2']))$caracteristicas .= getR('birlos_2');
					$observaciones = getR('observaciones_2');

					registrar_vehiculo($iduser, $marca, $modelo, $transmision, $placas, $color, $ano, $caracteristicas, $observaciones);
				}
				header("location: /propietarios.php");
			break;
		

		default:
			# code...
			break;
	}
	function getR($campo) {
		if(isset($_REQUEST[$campo])) {
			return $_REQUEST[$campo];
		};
		return '';
	}
 ?>