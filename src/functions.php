<?php

session_start();
require('db-functions.php');


$id = (isset($_GET['id'])) ? $_GET['id'] : null;

switch ($_GET['action']) {
case 'update':
    if(isset($_POST['submit'])){
        
        $dbName = filter_input(INPUT_POST, "Name", FILTER_SANITIZE_SPECIAL_CHARS);
        $dbPrice = filter_input(INPUT_POST,"Price", FILTER_SANITIZE_NUMBER_FLOAT);
        $dbSale = filter_input(INPUT_POST, "Sale",  FILTER_SANITIZE_NUMBER_INT);
        $dbBandwidth = filter_input(INPUT_POST, "Bandwidth",  FILTER_SANITIZE_NUMBER_INT);
        $dbOnlinespace = filter_input(INPUT_POST, "Onlinespace",  FILTER_SANITIZE_NUMBER_INT);
        $dbSupport = filter_input(INPUT_POST, "Support",  FILTER_SANITIZE_NUMBER_INT);
        $dbDomain = filter_input(INPUT_POST, "Domain", FILTER_SANITIZE_SPECIAL_CHARS);
        $dbHiddenfees = filter_input(INPUT_POST, "HiddenFees",  FILTER_SANITIZE_SPECIAL_CHARS);
        
        if (isset($dbName)  && isset( $dbPrice ) && isset( $dbSale ) && isset( $dbBandwidth ) && isset( $dbOnlinespace ) && isset( $dbSupport ) && isset( $dbHiddenfees ) && isset( $dbDomain)){
            UpdatePricing($dbName ,  $dbPrice ,  $dbSale ,  $dbBandwidth ,  $dbOnlinespace ,  $dbSupport ,  $dbHiddenfees ,  $dbDomain, $id);
            $_SESSION['message'] = "<p>success</p>";
            header("Location:admin.php");
            die;
            
        }
        else{
            $_SESSION['message'] = "<p>error</p>";
            header("Location:admin.php");
    
        }
    }


}