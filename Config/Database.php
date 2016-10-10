<?php
    $serverName     = "192.168.1.2\TAZ, 1433";
    $DatabaseName   = 'SAMK_PROTECTA';
    $UserName       = 'CSEVILLA';
    $Password       = 'P@$$cS.1989';
    $connectionInfo = array( "Database"=>$DatabaseName, "UID"=>$UserName, "PWD"=>$Password, "MultipleActiveResultSets"=>true);
    $conn = sqlsrv_connect( $serverName, $connectionInfo);
    if($conn === false){
        die(print_r(sqlsrv_errors(), true));
    }
    
?>
