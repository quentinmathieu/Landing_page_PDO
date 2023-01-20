<?php

session_start();
require('db-functions.php');


$id = (isset($_GET['id'])) ? $_GET['id'] : null;

switch ($_GET['action']) {
case 'update':
    if(isset($_POST['submit'])){
        
        $dbName = filter_input(INPUT_POST, "Name", FILTER_SANITIZE_SPECIAL_CHARS);
        $price = str_replace(',', '.', $_POST['Price']);
        $dbPrice = filter_var($price, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
        $dbSale = filter_input(INPUT_POST, "Sale",  FILTER_SANITIZE_NUMBER_INT);
        $dbBandwidth = filter_input(INPUT_POST, "Bandwidth",  FILTER_SANITIZE_NUMBER_INT);
        $dbOnlinespace = filter_input(INPUT_POST, "Onlinespace",  FILTER_SANITIZE_NUMBER_INT);
        $dbSupport = filter_input(INPUT_POST, "Support",  FILTER_SANITIZE_NUMBER_INT);
        $dbDomain = filter_input(INPUT_POST, "Domain", FILTER_SANITIZE_SPECIAL_CHARS);
        $dbHiddenfees = filter_input(INPUT_POST, "HiddenFees",  FILTER_SANITIZE_SPECIAL_CHARS);
        

        if ($dbName  &&  ($dbPrice !==false && $dbPrice != null) &&  
        ($dbSale !==false  && $dbSale!= null)&&  ($dbBandwidth !==false  && $dbBandwidth!= null)&&  
        ($dbOnlinespace !==false  && $dbOnlinespace!= null)&&  ($dbSupport !==false  && $dbSupport!= null)&&  
        ($dbHiddenfees !==false  && $dbHiddenfees!= null)&&  $dbDomain){
            UpdatePricing($dbName ,  $dbPrice ,  $dbSale ,  $dbBandwidth ,  $dbOnlinespace ,  $dbSupport ,  $dbHiddenfees ,  $dbDomain, $id);
            $_SESSION['message'] = "<p class='succes'>success</p>";
            header("Location:admin.php");
            die;
            
        }
        else{
            $_SESSION['message'] = "<p class='error'>ERROR</p>";
            header("Location:admin.php");
    
        }
    }


}