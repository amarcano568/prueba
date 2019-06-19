<?php
$serverName = "192.168.64.39"; //serverName\instanceName
$connectionInfo = array( "Database"=>"Neosys_2510", "UID"=>"sa", "PWD"=>"", "CharacterSet" => "UTF-8");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( !$conn ) {
     echo "Conexión no se pudo establecer.<br />";
     die( print_r( sqlsrv_errors(), true));
}

?>
