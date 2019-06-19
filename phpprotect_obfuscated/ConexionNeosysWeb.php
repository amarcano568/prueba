<?php
$Vcexpqzu2lbf = "192.168.64.39"; 
$Vd25fj3tew4b = array( "Database"=>"Neosys", "UID"=>"sa", "PWD"=>"", "CharacterSet" => "UTF-8");
$Voft0a2ptprk = sqlsrv_connect( $Vcexpqzu2lbf, $Vd25fj3tew4b);

if( !$Voft0a2ptprk ) {
     echo "Conexión no se pudo establecer.<br />";
     die( print_r( sqlsrv_errors(), true));
}

?>
