<?php

    $serverName = "DESKTOP-WORK, 1433"; //serverName\instanceName, portNumber (por defecto es 1433)
    $connectionInfo = array( "Database"=>"liquidaciones_pfis", "UID"=>"usrLiquidaciones", "PWD"=>"usrLiquidaciones");
    $conn = sqlsrv_connect( $serverName, $connectionInfo);

    if( $conn ) {
        echo "Conexión establecida.<br />";
    }else{
        echo "Conexión no se pudo establecer.<br />";
        die( print_r( sqlsrv_errors(), true));
    }



?>