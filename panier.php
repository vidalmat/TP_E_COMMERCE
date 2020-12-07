<?php


require_once "articles.php";

session_start();
/* Initialisation du panier */
$_SESSION['panier'] = array();
/* Subdivision du panier */
$_SESSION['panier']['id_article'] = array();
$_SESSION['panier']['qte'] = array();
$_SESSION['panier']['prix'] = array();


// $select = array();
// $select['id'] = "cyberpunk";
// $select['qte'] = 10;
// $select['prix'] = 69.90;

// $select = array();
// $select['id'] = "spiderman";
// $select['qte'] = 10;
// $select['prix'] = 69.90;

// function creationPanier(){
//     if (!isset($_SESSION['panier'])){
//        $_SESSION['panier']=array();
//        $_SESSION['panier']['id'] = array();
//        $_SESSION['panier']['qte'] = array();
//        $_SESSION['panier']['prix'] = array();
//        $_SESSION['panier']['verrou'] = false;
//     }
//     return true;
//  }

$array1 = [
    "id" => "cyberpunk",
    "qte" => 10,
    "prix" => 69.90,
];

$array2 = [
    "id" => "spiderman",
    "qte" => 8,
    "prix" => 69.90,
];

var_dump($array1, $array2);
var_dump($_SESSION);



?>