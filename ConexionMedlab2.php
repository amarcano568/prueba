﻿<?php
$serverName = "192.168.64.39"; //serverName\instanceName
$connectionInfo = array( "Database"=>"Medlab2", "UID"=>"sa", "PWD"=>"", "CharacterSet" => "UTF-8");
$connMedlab2 = sqlsrv_connect( $serverName, $connectionInfo);

if( !$connMedlab2 ) {
     echo "Conexión no se pudo establecer.<br />";
     die( print_r( sqlsrv_errors(), true));
}

?>