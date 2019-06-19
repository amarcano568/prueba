<?php
$serverName = "192.168.64.39"; //serverName\instanceName
$connectionInfo = array( "Database"=>"Labcore", "UID"=>"sa", "PWD"=>"", "CharacterSet" => "UTF-8");
$connLabcore = sqlsrv_connect( $serverName, $connectionInfo);

if( !$connLabcore ) {
     echo "Conexión no se pudo establecer.<br />";
     die( print_r( sqlsrv_errors(), true));
}

?>
