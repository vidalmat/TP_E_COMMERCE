<?php

require_once "articles.php";

$article = $articles[1];

?>




        <article>

            <div class="conteneur_header">
            
                <h1 class="titre_header">Marvel's Spider-Man : Miles Morales</h1>
                <h2 class="sous_titre_header">Tout support PS4 PS5</h2>

            </div>

            <p class="fildar">jeuxvideo.com /  accueil /<span> Spider-man</span></p>

            <div class="conteneur1">
                <img src="images/spider_man.jpg" alt="Spider-man">
            
                <div class="conteneur2_3">
        
                    <div class="conteneur2">
                        <p>test<br>16</p>
                        <span class="span"></span>
                        <p>avis<br>15.8</p>
                    </div>

                        <div class="conteneur3">

                            <p>Synopsis : Marvel's Spider-Man : Miles Morales est un jeu d'action sur PS5. Vous y incarnez Miles Morales, nouveau porteur du costume de Spider-Man. Ce standalone n'est pas la véritable suite de Marvel's Spider-Man, mais reste une nouvelle aventure vous permettant de profiter des pouvoirs de l'homme-araignée en sautant de toit en toit.</p>
                            
                            <div class="conteneur4">  
                                <p id="sortie">Sortie : 19 nov. 2020</p>
                                <p id="prix">Prix : 69,90€</p>

                                <form action="panier.php" method="POST">
                                    <input type="submit" value="Ajouter au panier">
                                </form>
                            </div>  

                        </div>
                </div>
            </div>

            <p id="preview"><a href="https://www.jeuxvideo.com/videos/1315904/marvel-s-spider-man-miles-morales-classique-mais-toujours-aussi-accrocheur.htm">► Video preview</a></p>

            

        </article>
        
    </body>

</html>