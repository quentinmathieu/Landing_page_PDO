<?php
function connexion()

{

    try {
        $db = new PDO(
            'mysql:host=127.0.0.55;port=3306;dbname=landingPage',
            'root',
            '',
            [
                \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
                \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
                \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
            ]
        );
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }

    return $db;
}

function findAll()
{
    $db = connexion();
    $products = [];
    $sql = "SELECT *
            FROM
                pricing
                LIMIT 3";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $products = $stmt->fetchAll();
    return $products;
}


function findOneById($id)
{
    $db = connexion();
    $sql = "SELECT *
            FROM
            pricing
                WHERE id = :idToFind";
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':idToFind', $id);
    $stmt->execute();
    $product = $stmt->fetch();
    return $product;
}

function UpdatePricing($dbName ,  $dbPrice ,  $dbSale ,  $dbBandwidth ,  $dbOnlinespace ,  $dbSupport ,  $dbHiddenfees ,  $dbDomain, $id)
{
   
    $db = connexion();


        $sql = "UPDATE pricing
        Set Name = :Name, Price = :Price, Sale = :Sale, Bandwidth = :Bandwidth, Onlinespace=:Onlinespace, Support=:Support, HiddenFees=:HiddenFees, Domain=:Domain
        WHERE id= :id";

        $stmt = $db->prepare($sql);
        $stmt->bindValue(':Name', $dbName);
        $stmt->bindValue(':Price', $dbPrice);
        $stmt->bindValue(':Sale', $dbSale);
        $stmt->bindValue(':Bandwidth', $dbBandwidth);
        $stmt->bindValue(':Onlinespace', $dbOnlinespace);
        $stmt->bindValue(':Support', $dbSupport);
        $stmt->bindValue(':HiddenFees', $dbHiddenfees);
        $stmt->bindValue(':Domain', $dbDomain);
        $stmt->bindValue(':id', $id);
        $stmt->execute();
        return;
    
}