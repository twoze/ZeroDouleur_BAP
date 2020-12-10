<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <body>

        <div class="center">
            <h2>Connexion</h2>
            <br><br>
            <form method="POST" action="">
                <input type="email" name="mailConnect" placeholder="Mail">
                <input type="password" name="mdpConnect" placeholder="Mot de passe">
                <input type="submit" name="formConnect" value="Se connecter !">
            </form>
            <a href="?page=inscription">Vous inscrire !</a>
            <a href="?page=home">Home</a>
            <?php

            if (isset($erreur)) {
                echo $erreur;
            }
            ?>
        </div>
    </body>
</body>

</html>