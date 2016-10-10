<?php
    require "Config/Database.php";
    
    ini_set('display_errors', 1);
    error_reporting(~0);

    if ($conn == false){
        die("<p>Database connection failed...</p> <pre>".print_r(SQLSRV_ERRORS(), true)."</pre>");
    }

    $return = '';
    $FecMinSiniestro = '01/03/2016';
    $FecMaxSiniestro = '10/07/2016';
    //$query = "{call spu_RPT_maestro (@FecMinSiniestro = ?, @FecMaxSiniestro = ?)};";   $stmt = 'Exec spinsert @tabla=?,@columnas=?,@valores=?';  
    //$query = "{call spu_RPT_maestro (@FecMinSiniestro = ?, @FecMaxSiniestro = ?)};";
    
    /*
    $query = 'Exec spu_RPT_maestro @FecMinSiniestro = ?, @FecMaxSiniestro = ?';
    $params = array(
                    array($FecMinSiniestro, SQLSRV_PARAM_IN),
                    array($FecMaxSiniestro, SQLSRV_PARAM_IN)
    );
    $smtp = SQLSRV_QUERY($conn,$query,$params);
    */
    $query = "Exec spu_RPT_maestro @FecMinSiniestro = '01/03/2016', @FecMaxSiniestro = '10/07/2016'";
    
    $smtp = sqlsrv_query($conn,$query);
    if($smtp === false){
        echo "Error in executing statement preparaton/execution.\n";
        die(print_r(SQLSRV_ERRORS(), TRUE));
    }

    while($result = sqlsrv_fetch_array($smtp, SQLSRV_FETCH_BOTH)){
        //print_r($result);
        //echo $result["MES"];
    }

    sqlsrv_close($conn);
    /*
    echo "Query 1 result:\n";  
    while($row = sqlsrv_fetch_array($stmp, SQLSRV_FETCH_NUMERIC)){
         print_r($row);
    }
    sqlsrv_next_result($stmp);  
    echo "Query 2 result:\n";  
    echo "Rows Affected: ".sqlsrv_rows_affected($stmp)."\n";  
    sqlsrv_next_result($stmp);  
    echo "Query 3 result:\n";  
    while($row = sqlsrv_fetch_array($stmp, SQLSRV_FETCH_NUMERIC)){  
         print_r($row);  
    }  
    */


    /*
    $productCount = 0;
    $ctr = 0;
     ?>
     <h1> First 10 results are after executing the stored procedure: </h1>
     <?php
     while($row = sqlsrv_fetch_array($smtp, SQLSRV_FETCH_ASSOC)){
         var_dump($row);
     if($ctr>9)
     break;
     $ctr++;
     echo($row[0]);
     echo("<br/>");
     $productCount++; 
     }
     sqlsrv_free_stmt($smtp);
     */

    /*
    var_dump($smtp);    
    sqlsrv_free_stmt($smtp);
    */
    
    //$sql = "EXEC spu_RPT_maestro '01/03/2016', '06/10/2016'";
    //$result = sqlsrv_query($conn,$sql);
    
    //$arr = sqlsrv_fetch($stmp);
    //var_dump($arr);

?>
