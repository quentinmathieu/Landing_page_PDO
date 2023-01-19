<?php

session_start();
require('db-functions.php');


$id = (isset($_GET['id'])) ? $_GET['id'] : null;

switch ($_GET['action']) {
case 'update':
    if(isset($_POST['submit'])){
        
        $dbName = filter_input(INPUT_POST, "Name", FILTER_SANITIZE_SPECIAL_CHARS);
        $dbPrice = filter_input(INPUT_POST,"Price", FILTER_SANITIZE_SPECIAL_CHARS );
        $dbSale = filter_input(INPUT_POST, "Sale",  FILTER_SANITIZE_SPECIAL_CHARS);
        $dbBandwidth = filter_input(INPUT_POST, "Bandwidth",  FILTER_SANITIZE_SPECIAL_CHARS);
        $dbOnlinespace = filter_input(INPUT_POST, "Onlinespace",  FILTER_SANITIZE_SPECIAL_CHARS);
        $dbSupport = filter_input(INPUT_POST, "Support",  FILTER_SANITIZE_SPECIAL_CHARS);
        $dbHiddenfees = filter_input(INPUT_POST, "HiddenFees",  FILTER_SANITIZE_SPECIAL_CHARS);
        $dbDomain = filter_input(INPUT_POST, "Domain", FILTER_SANITIZE_SPECIAL_CHARS);
        
        // var_dump($dbPrice);die;
        if ($dbName && $dbPrice && $dbSale && $dbBandwidth && $dbOnlinespace && $dbSupport && $dbHiddenfees && $dbDomain){
            echo 'test'; die;
            UpdatePricing($dbName, $dbDescr, $dbPrice);
            header("Location:admin.php?article=" . $dbName);
            
        }
        else{
            echo 'none'; die;
            // header("Location:admin.php?article=");
    
        }
    }


}