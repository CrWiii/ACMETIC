<?php
    require '../Config/Database.php';

       $Casos = array();
        while($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
            $row_array['CASO'] = $row['GRL_ENCARGONRO'];
            $row_array['TIPO DE SINISESTRO'] = $row['GRL_SINIESTRO_OBS'];
            $row_array['TIPO DE POLIZA'] = $row['GRL_TipPoliza'];
            /*$row_array['GRL_CERSOATNRO'] =$row['GRL_CERSOATNRO'];
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
            $row_array['DACCIDENTE_DISTRITO'] =$row['daccidente_distrito'];
            $row_array['fechahorallamada'] =$row['fechahorallamada'];
            $row_array['ComentSinCarta'] =$row['ComentSinCarta'];
            $row_array['TotalCartasGPendientes'] =$row['TotalCartasGPendientes'];*/
        array_push($Casos,$row_array);
        }
   echo json_encode($Casos);

?>
