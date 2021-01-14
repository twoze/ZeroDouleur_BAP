<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../App/css/style.css">
        <title>IndoloR: Connexion</title>
    </head>
    <body>
        <header>
            <nav>
                <a href="?page=home" class="logo"><img src="../App/img/logo.svg" alt="Logo"><h1>IndoloR</h1></a>
                <a href="?page=inscription"><button class="btn">S'inscrire</button></a>
            </nav>
        </header>
        <div class="box">
            <h1>Connexion</h1>
            <form method="POST" action="">
                <label for="email">Adresse mail</label>
                <input type="email" name="mailConnect">

                <label for="password">Mot de passe</label>
                <input type="password" name="mdpConnect">
                <div class="btnPosition">
                    <input type="submit" name="formConnect" value="Se connecter" class="btn">
                </div>
            </form>
            <?php
                if (isset($erreur)) {
                    echo $erreur;
                }
            ?>
        </div>
    </body>
</html>