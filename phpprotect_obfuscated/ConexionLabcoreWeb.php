<?php
$Vcexpqzu2lbf = "192.168.64.39"; 
$Vd25fj3tew4b = array( "Database"=>"Labcore", "UID"=>"sa", "PWD"=>"", "CharacterSet" => "UTF-8");
$Vv0pkg20m012 = sqlsrv_connect( $Vcexpqzu2lbf, $Vd25fj3tew4b);

if( !$Vv0pkg20m012 ) {
     echo "Conexión no se pudo establecer.<br />";
     die( print_r( sqlsrv_errors(), true));
}

?>
