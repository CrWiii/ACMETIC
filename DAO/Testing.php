<?php
    require 'Config/Database.php';
    //require 'Config/Database.php';
   //$COUNT = 1;
    $AccidentesPorUbigeo = '';
    $CAMD = "SELECT COUNT(GRL_ENCARGONRO) AS CantidadCasos, Nom_CentroMedico FROM AtencionMedica a LEFT JOIN BDProCentroMedico c ON a.DAInicial_CentroMedico=c.Cod_CentroMedico GROUP BY all Nom_CentroMedico ORDER BY CantidadCasos";
    $CCMD = "SELECT COUNT(DISTINCT GRL_ENCARGONRO) AS CantidadCasos, Nom_CentroMedico FROM AtencionMedica a LEFT JOIN BDProCentroMedico c ON a.DAInicial_CentroMedico=c.Cod_CentroMedico GROUP BY all Nom_CentroMedico ORDER BY CantidadCasos";
    $CCGPCM = "SELECT SUM(CONVERT(NUMERIC(18,2),TotalCartas)) as TC, Nom_CentroMedico FROM AtencionMedica a LEFT JOIN BDProCentroMedico c ON a.DAInicial_CentroMedico=c.Cod_CentroMedico GROUP BY all Nom_CentroMedico";
    $CAPU = "SELECT COUNT(GRL_ENCARGONRO) AS CantidadCasos, DACCIDENTE_DISTRITO FROM AtencionMedica GROUP BY all DACCIDENTE_DISTRITO";
    $CCPU = "SELECT COUNT(DISTINCT GRL_ENCARGONRO) AS CantidadCasos, DACCIDENTE_DISTRITO FROM AtencionMedica GROUP BY all DACCIDENTE_DISTRITO";
   
/*   
    $sql = "SELECT DACCIDENTE_DISTRITO,GRL_ENCARGONRO,GRL_SINIESTRO_OBS,GRL_TipPoliza,GRL_CERSOATNRO,DACCIDENTE_FECHA,GRL_CNIA,CabeceraReservaGtosMedUpDate,CabeceraReservaMuerte,CabeceraReservaSepelio,CabeceraReservaIncap,CabeceraReservaInval,TotalCartas,GRL_SINIESTRO_OBS,GRL_TipPoliza,GRL_CERSOATNRO,DACCIDENTE_FECHA,GRL_CNIA,CabeceraReservaGtosMedUpDate,CabeceraReservaMuerte,CabeceraReservaSepelio,CabeceraReservaIncap,CabeceraReservaInval,TotalCartas,CabeceraSumFactura,CabeceraSumReemb,CabeceraCostoSiniestro,CabeceraSumCobertura,DAccidentado_Edad,DAccidentado_Sexo,DDiagnostico_Tipo ,DAInicial_CentroMedico,fechahorallamada,ComentSinCarta,TotalCartasGPendientes,CabeceraSumFactura,CabeceraSumReemb,CabeceraCostoSiniestro,CabeceraSumCobertura,DAccidentado_Edad,DAccidentado_Sexo,DDiagnostico_Tipo,DAInicial_CentroMedico,fechahorallamada,ComentSinCarta,TotalCartasGPendientes,Nom_CentroMedico,vlugar  FROM AtencionMedica a LEFT JOIN BDProCentroMedico c ON a.DAInicial_CentroMedico=c.Cod_CentroMedico";
   
    //$sql = 'SELECT * from AtencionMedica';
    $stmt = sqlsrv_query($conn, $sql);
    if( $stmt === false ) {
         echo "Error in executing query.</br>";
         die( print_r( sqlsrv_errors(), true));
    }


   header ('Content-type: text/html; charset=utf-8');
    $AccidentesPorUbigeo = array();
        while($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
            //$c =  mb_convert_encoding($row['DACCIDENTE_DISTRITO'], "UTF-8", "iso-8859-1");
            //var_dump($c);
            //$row_array['CANTIDAD_ACCIDENTADOS'] = '';
            $row_array['CASO'] = $row['GRL_ENCARGONRO'];
            $row_array['TIPO DE SINISESTRO'] = $row['GRL_SINIESTRO_OBS'];
            $row_array['TIPO DE POLIZA'] = $row['GRL_TipPoliza'];
            $row_array['GRL_CERSOATNRO'] =$row['GRL_CERSOATNRO'];
            $row_array['DACCIDENTE_FECHA'] =$row['DACCIDENTE_FECHA'];
            $row_array['GRL_CNIA'] =$row['GRL_CNIA'];
            $row_array['CabeceraReservaGtosMedUpDate'] =$row['CabeceraReservaGtosMedUpDate'];
            $row_array['CabeceraReservaMuerte'] =$row['CabeceraReservaMuerte'];
            $row_array['CabeceraReservaSepelio'] =$row['CabeceraReservaSepelio'];
            $row_array['CabeceraReservaIncap'] =$row['CabeceraReservaIncap'];
            $row_array['CabeceraReservaInval'] =$row['CabeceraReservaInval'];
            $row_array['TotalCartas'] =$row['TotalCartas'];
            $row_array['CabeceraSumFactura'] =$row['CabeceraSumFactura'];
            $row_array['CabeceraSumReemb'] =$row['CabeceraSumReemb'];
            $row_array['CabeceraCostoSiniestro'] =$row['CabeceraCostoSiniestro'];
            $row_array['CabeceraSumCobertura'] =$row['CabeceraSumCobertura'];
            $row_array['DAccidentado_Edad'] =$row['DAccidentado_Edad'];
            $row_array['DAccidentado_Sexo'] =$row['DAccidentado_Sexo'];
            $row_array['DDiagnostico_Tipo'] =$row['DDiagnostico_Tipo'];
            $row_array['DAInicial_CentroMedico'] =$row['DAInicial_CentroMedico'];
            $row_array['DACCIDENTE_DISTRITO'] = mb_convert_encoding($row['DACCIDENTE_DISTRITO'], "UTF-8", "iso-8859-1");
            $row_array['fechahorallamada'] =$row['fechahorallamada'];
            $row_array['ComentSinCarta'] =$row['ComentSinCarta'];
            $row_array['TotalCartasGPendientes'] =$row['TotalCartasGPendientes'];
            //$row_array['vlugar'] =$row['vlugar'];
            $row_array['Nom_CentroMedico'] = mb_convert_encoding($row['Nom_CentroMedico'], "UTF-8", "iso-8859-1");
        array_push($AccidentesPorUbigeo,$row_array);
      //  $COUNT++;
        }
        //$AccidentesPorUbigeo['TOTAL'] = $COUNT;
*/    $AU = '';//if(!empty($AccidentesPorUbigeo)){json_encode($AccidentesPorUbigeo)}else{$AccidentesPorUbigeo=''};


    header ('Content-type: text/html; charset=utf-8');

    $stmt = sqlsrv_query($conn, $CCMD);
    if($stmt === false){
         echo "Error in executing query.</br>";
         die( print_r( sqlsrv_errors(), true));}
    $CCMDCantidadCasos = array();
    $CCMDCentrosMedicos = array();
        while($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)){
            array_push($CCMDCantidadCasos, $row['CantidadCasos']);
            array_push($CCMDCentrosMedicos, mb_convert_encoding($row['Nom_CentroMedico'], "UTF-8", "iso-8859-1"));}
    $CCMDresultCC = json_encode($CCMDCantidadCasos);
    $CCMDresultCM = json_encode($CCMDCentrosMedicos);
    
    $stmt = sqlsrv_query($conn, $CAMD);
    if($stmt === false){
         echo "Error in executing query.</br>";
         die(print_r(sqlsrv_errors(),true));}
    $CAMDCantidadAccidentados = array();
    $CAMDCentrosMedicos = array();
        while($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)){
            array_push($CAMDCantidadAccidentados, $row['CantidadCasos']);
            array_push($CAMDCentrosMedicos, mb_convert_encoding($row['Nom_CentroMedico'], "UTF-8", "iso-8859-1"));}
    $CAMDresultCC = json_encode($CAMDCantidadAccidentados);
    $CAMDresultCM = json_encode($CAMDCentrosMedicos);

    $stmt = sqlsrv_query($conn, $CCGPCM);
    if($stmt === false){
         echo "Error in executing query.</br>";
         die(print_r(sqlsrv_errors(),true));}
    $CCGPCMTotalCartas = array();
    $CCGPCMCentrosMedicos = array();
        while($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)){
            array_push($CCGPCMTotalCartas, (float) $row['TC']);
            array_push($CCGPCMCentrosMedicos, mb_convert_encoding($row['Nom_CentroMedico'], "UTF-8", "iso-8859-1"));}
    $CCGPCMresultCC = json_encode($CCGPCMTotalCartas);
    $CCGPCMresultCM = json_encode($CCGPCMCentrosMedicos);
    
    $stmt = sqlsrv_query($conn, $CCPU);
    if($stmt === false){
        echo "Error in executing query.</br>";
        die(print_r(sqlsrv_errors(),true));}
    $CCPUTotalCartas = array();
    $CCPUCentrosMedicos = array();
        while($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)){
            array_push($CCPUTotalCartas, $row['CantidadCasos']);
            array_push($CCPUCentrosMedicos, mb_convert_encoding($row['DACCIDENTE_DISTRITO'], "UTF-8", "iso-8859-1"));}
    $CCPUresultCC = json_encode($CCPUTotalCartas);
    $CCPUresultCM = json_encode($CCPUCentrosMedicos);

    $stmt = sqlsrv_query($conn, $CAPU);
    if($stmt === false){
         echo "Error in executing query.</br>";
         die(print_r(sqlsrv_errors(),true));}
    $CAPUTotalAccidentados = array();
    $CAPUUbigeo = array();
        while($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)){
            array_push($CAPUTotalAccidentados, $row['CantidadCasos']);
            array_push($CAPUUbigeo, mb_convert_encoding($row['DACCIDENTE_DISTRITO'], "UTF-8", "iso-8859-1"));}
    $CAPUresultCC = json_encode($CAPUTotalAccidentados);
    $CAPUresultCM = json_encode($CAPUUbigeo);   
    




    sqlsrv_free_stmt( $stmt);
    sqlsrv_close($conn);
?>