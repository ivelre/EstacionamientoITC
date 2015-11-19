<?php 
include('/adodb/adodb.inc.php');
$DB = NewADOConnection('mysqli');
$DB->Connect('localhost', 'root', '', 'estacionamiento');

# M'soft style data retrieval with binds
$ADODB_FETCH_MODE = ADODB_FETCH_NUM;
	$rs = $DB->Execute("select * from usuario ");
	foreach($rs as $k => $row) {
		echo "r1=".$row[0]." r2=".$row[1]."<br>";
	}
 ?>