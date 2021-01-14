<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../App/css/style.css">
    <title>Document</title>
</head>
<body>
    <header><!--menu-->
        <nav>
            <a href="?page=home" class="logo"><img src="../App/img/logo.svg" alt="Logo"><h1>IndoloR</h1></a>
            <a href="?page=connexion"><button class="btn">Retour</button></a>
        </nav>
    </header>
    <div class="box">
        <h1>Inscription</h1><!--formulaire d'inscription-->
        <form method="POST" action="">
        
            <label for="pseudo">Pseudonyme</label>
            <input type="text" name="pseudo" value="<?php /*Si erreur, conserve le peseudo*/if(isset($pseudo)) { echo $pseudo; }?>">

            <label for="mail">Adresse-mail</label>
            <input type="email" name="email" value="<?php /*Si erreur, conserve le pseudo*/if(isset($mail)) { echo $mail; }?>">

            <label for="mail2">Confirmation de l'adresse-mail</label>
            <input type="email" name="email2" value="<?php /*Si erreur, conserve le peseudo*/if(isset($mail2)) { echo $mail2; }?>">

            <label for="motdepasse">Mot de passe</label>
            <input type="password" name="motdepasse">

            <label for="motdepasse2">Confirmation du mot de passe</label>
            <input type="password" name="motdepasse2">

            <div class="btnPosition">
                <input type="submit" name="forminscription" value="Je m'inscris" class="btn">
            </div>
        </form>
        
            <?php
                if(isset($erreur))
                {
                    echo $erreur;
                }

            ?>
    </div>
</body>
</html>