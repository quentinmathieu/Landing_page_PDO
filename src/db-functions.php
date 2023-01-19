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

// function insertProduct(string $name, string $descr, float $price)
// {
//     if (session_status() == PHP_SESSION_NONE) {

//         session_start();
//     }
//     $db = connexion();


//         $sql = "INSERT INTO product(name, description, price) VALUES (:name, :descr, :price)";

//         $stmt = $db->prepare($sql);

//         $stmt->bindValue(':name', $name);
//         $stmt->bindValue(':descr', $descr);
//         $stmt->bindValue(':price', $price);
//         $stmt->execute();
//         return;
    
// }