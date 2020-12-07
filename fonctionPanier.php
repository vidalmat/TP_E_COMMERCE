<?php

function ajouterArticle($id,$qte,$prix){

    //Si le panier existe
    if (creationPanier() && !isVerrouille())
    {
       //Si le produit existe déjà on ajoute seulement la quantité
       $positionProduit = array_search($id,  $_SESSION['panier']['libelleProduit']);
 
       if ($positionProduit !== false)
       {
          $_SESSION['panier']['qteProduit'][$positionProduit] += $qte ;
       }
       else
       {
          //Sinon on ajoute le produit
          array_push( $_SESSION['panier']['id'],$id);
          array_push( $_SESSION['panier']['qte'],$qte);
          array_push( $_SESSION['panier']['prix'],$prix);
       }
    }
    else
    echo "Un problème est survenu veuillez contacter l'administrateur du site.";







?>