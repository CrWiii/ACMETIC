<?php
    /*
    $oQuery = new SqlCommand('GetCustomerList');
    $oQuery->addParam('StoreId', $_GET['StoreId'], 'int');
    $oQuery->addParam('CustomerType', $_GET['CustomerType'], 'varchar', 50);
    // Assume you have an open PEAR database connection ($pearDB)
    $arrResults = $oQuery->getAll($pearDB);
    */

    $oQuery = new SqlCommand('GetStoreCustomerCount');  
    $oQuery->addParam('StoreId', $_GET['StoreId'], 'int');  
    $oQuery->addParam('CustomerCount', null, 'int');  
    // One extra method call is required to configure a parameter for output  
    $oQuery->setParamDirection('CustomerCount', true);  
    // Assume you have an open PEAR database connection ($pearDB)  
    $arrResults = $oQuery->getAll($pearDB);  
    // Now retrieve the value of your output parameter  
    $count = $oQuery->getOutputValue('CustomerCount');
?>

