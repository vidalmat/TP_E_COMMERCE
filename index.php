<?php

    // pour savoir en cas de bug (debug), afin de vérifier que tout fonctionne comme console.log
    // var_dump($_GET);


    // Structure de routage : définir la page qui sera inclue, en fonction de la valeur $_GET;["page] (choix de l'utilisateur)
    // Si $_GET["page] est défini :
    if(isset($_GET["page"])) {

        $tabArticle = $_GET["page"].".php";

        switch($_GET["page"]) {
            case "page1" : $tabArticle = "page1.php";
            break;
            case "page2" : $tabArticle = "page2.php";
            break;
            case "page3" : $tabArticle = "page3.php";
            break;
            case "vuearticle" : $tabArticle = "vuearticle.php";
            break;
            default : $tabArticle = "page1.php";              /* solution par défaut en cas d'un choix non prévu */
        }

    }else {

        $tabArticle = "page1.php";

    }


?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css?v={<?php uniqid() ?>}">
    <title>TP PHP</title>
</head>
<body>
<header>

                <img src="images/jeuxvideocomlogo.png" alt="logo jeuxvideo.com" id="logo_accueil">


                <div class="li_haut">
                    <ul>
                        <li><a href="index.php?page=page1">Accueil</li></a>
                        <li><a href="index.php?page=page2">Cyberpunk 2077</li></a>
                        <li><a href="index.php?page=page3">Spider-man Miles Morales</li></a>
                    </ul>
                </div>
                
            </header>

           
            <?php require $tabArticle ?>

            
            
    
</body>
</html>
