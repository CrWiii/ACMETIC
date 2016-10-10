<?php
    require '../Config/Database.php';
    $sql ="select DACCIDENTE_DISTRITO, COUNT(GRL_ENCARGONRO) as 'CANTIDAD DE ACCIDENTES'  FROM AtencionMedica GROUP BY all DACCIDENTE_DISTRITO";
    $stmt = sqlsrv_query($conn, $sql);
    if( $stmt === false ) {
         echo "Error in executing query.</br>";
         die( print_r( sqlsrv_errors(), true));
    } //var myJsonString = JSON.stringify(yourArray);
    
        /*
    $sql2 = "SELECT a.ID,Nom_CentroMedico Centro_Medico, GRL_ENCARGONRO
             FROM AtencionMedica a
             LEFT JOIN BDProCentroMedico c ON a.DAInicial_CentroMedico=c.Cod_CentroMedico";
             */
    
    /*
    do {
        while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
        $json[] = $row;
        }
        } while ( sqlsrv_next_result($stmt) );
        foreach($json as &$each) {
        //$each[0] = date('Y-m-d', strtotime($each[0]));
        $json['A'] = $each['UBIGEO'];
        }
        echo json_encode($json);
        */
    //$COUNT = 1;
    $AccidentesPorUbigeo = array();
    //$AccidentesPorUbigeo['TOTAL'] = array();
        while($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_NUMERIC)) {
            //var_dump($row);
            //$row_array['UBIGEO'] = $row[0];
            $row_array['CANTIDAD DE ACCIDENTES'] = $row[1];
            //$row_array['UBIGEO'] = 'dfasdfasd';
            //$row_array['UBIGEO'] = $row[1];
        array_push($AccidentesPorUbigeo,$row_array);
      //  $COUNT++;
        }
        //$AccidentesPorUbigeo['TOTAL'] = $COUNT;
   echo json_encode($AccidentesPorUbigeo);
    sqlsrv_free_stmt( $stmt);
    sqlsrv_close($conn);
?>