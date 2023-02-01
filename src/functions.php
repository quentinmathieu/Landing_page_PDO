<?php

session_start();
require('db-functions.php');


$id = (isset($_GET['id'])) ? $_GET['id'] : null;

switch ($_GET['action']) {
    case 'email':
        $email = filter_input(INPUT_POST, "email",FILTER_SANITIZE_EMAIL);
        insertEmail($email);
        break;
    case 'update':
        if (isset($_POST['submit'])) {

            $dbName = filter_input(INPUT_POST, "Name", FILTER_SANITIZE_SPECIAL_CHARS);

            //exception for this filter input because of the float input
            $price = str_replace(',', '.', $_POST['Price']);
            $dbPrice = filter_var($price, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);


            $dbSale = filter_input(INPUT_POST, "Sale",  FILTER_SANITIZE_NUMBER_INT);
            $dbBandwidth = filter_input(INPUT_POST, "Bandwidth",  FILTER_SANITIZE_NUMBER_INT);
            $dbOnlinespace = filter_input(INPUT_POST, "Onlinespace",  FILTER_SANITIZE_NUMBER_INT);
            $dbSupport = filter_input(INPUT_POST, "Support",  FILTER_SANITIZE_NUMBER_INT);
            $dbDomain = filter_input(INPUT_POST, "Domain", FILTER_SANITIZE_SPECIAL_CHARS);

            //Domain is a string because it can be an int or be "unlimited"
            $dbHiddenfees = filter_input(INPUT_POST, "HiddenFees",  FILTER_SANITIZE_SPECIAL_CHARS);

            //exeption for all numbers values because of '0' in inputs that is 'false' for the condition
            //instead of that, this check if the var aren't equal to false AND not null
            if (
                $dbName  &&  ($dbPrice !== false && $dbPrice != null) &&
                ($dbSale !== false  && $dbSale != null) &&  ($dbBandwidth !== false  && $dbBandwidth != null) &&
                ($dbOnlinespace !== false  && $dbOnlinespace != null) &&  ($dbSupport !== false  && $dbSupport != null) &&
                ($dbHiddenfees !== false  && $dbHiddenfees != null) &&  $dbDomain
            ) {
                UpdatePricing($dbName,  $dbPrice,  $dbSale,  $dbBandwidth,  $dbOnlinespace,  $dbSupport,  $dbHiddenfees,  $dbDomain, $id);
                $_SESSION['message'] = "<p class='succes message'>'$dbName' updated</p>";
                header("Location:admin.php");
                die;
            } else {
                $_SESSION['message'] = "<p class='error message'>ERROR</p>";
                header("Location:admin.php");
            }
        }
        break;
    case 'addOrder':
        //increment order by 1 when the user click on "join now"
        if (isset($id)) {
            incrementOrder($id);
            $_SESSION['message'] = "<p class='succes message'>Success</p>";
            header("Location:../index.php#pricing");
        }
        else{
            $_SESSION['message'] = "<p class='error message'>ERROR</p>";
            header("Location:../index.php#pricing");


        }
        break;
}
