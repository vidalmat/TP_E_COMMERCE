<?php


require_once "articles.php";





?>

<p class="fildar">jeuxvideo.com / accueil /<span></span> connexion</span></p>

<div class="conteneur_connexion">

    <div class="connexion">

        <p class="parconnexion">Vous tentez d'accéder à un contenu qui nécessite que vous soyez connecté(e).</p>

        <form action="index.php?page=panier" method="POST">
            
            <?php if(!isset($_SESSION["user"])): ?>
                <h1><img src="images/fleche_bas.png" alt="fleche bas">Se connecter</h1>
            
                <input type="email" placeholder="Email" name="email" required>
                
                <?php else: ?>
                    <input type="password" placeholder="Mot de passe" name="password" required >
                <?php endif ?>
            <input type="submit" id='submit' value='LOGIN' >
        </form>
    </div>

    <span class="span2"></span>
            
    <div class="creation_compte">
                <form action="connexion.php" method="POST">
                    <h2>Vous n'avez pas de compte?</h2>

                    <input type="submit" id='submit' value='Créer un compte' >
                </form>
            </div>
    
</div>
