<?php

// session_start();
// /* Initialisation du panier */
// $_SESSION['panier'] = array();
// /* Subdivision du panier */
// $_SESSION['panier']['id_article'] = array();
// $_SESSION['panier']['qte'] = array();
// $_SESSION['panier']['prix'] = array();


// $select = array();
// $select['id'] = "cyberpunk";
// $select['qte'] = 10;
// $select['prix'] = 69.90;

// $select = array();
// $select['id'] = "spiderman";
// $select['qte'] = 10;
// $select['prix'] = 69.90;

function creationPanier(){
    if (!isset($_SESSION['panier'])){
       $_SESSION['panier']=array();
       $_SESSION['panier']["id"] = array();
       $_SESSION['panier']["qte"] = array();
       $_SESSION['panier']["prix"] = array();
       $_SESSION['panier']["verrou"] = false;
    }
    return true;
 }







?>