<?php

require_once "articles.php";

$article = $articles[0];

?>





        <article>

            <div class="conteneur_header">
                
                <h1 class="titre_header">Cyberpunk 2077</h1>
                <h2 class="sous_titre_header">Tout support <a href="#">PC</a><a href="#"> PS4</a><a href="#"> PS5</a><a href="#"> ONE</a></h2>

            </div>

            <p class="fildar">jeuxvideo.com / accueil /<span></span> Cyberpunk 2077</span></p>

            <div class="conteneur1">
                <img src="images/cyber-punk-2077.jpg" alt="Cyberpunk">
            
                <div class="conteneur2_3">

                    <div class="conteneur2">
                        <p>test<br>--</p>
                        <span class="span"></span>
                        <p>avis<br>--</p>
                    </div>

                        <div class="conteneur3">

                            <p>Synopsis : Cyberpunk 2077 est un jeu de rôle futuriste et dystopique inspiré du jeu de rôle papier du même nom. Dans un monde devenu indissociable de la cybernétique, l'indépendance des robots humanoïdes pose quelques problèmes...</p>
                            
                            
                            <div class="conteneur4">
                                <p id="sortie">Sortie : 10 déc. 2020</p>
                                <p id="prix">Prix : 69,90€</p>

                                <form action="panier.php" method="POST">
                                    <input type="submit"  value="Ajouter au panier">
                                </form>
                            </div>

                        </div>
                </div>

            </div>

            <p id="preview"><a href="https://www.jeuxvideo.com/videos/1326131/cyberpunk-2077-nos-dernieres-impressions-apres-15-heures-de-jeu.htm">Video preview</a></p>

            

        </article>

    </body>

</html>