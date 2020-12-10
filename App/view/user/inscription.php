<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Inscription</h2>
            <br><br>
            <form method="POST" action="">
                <table>
                    <tr>
                        <td >
                            <label for="pseudo">Pseudo :</label>
                        </td>
                        <td>
                            <input type="text" placeholder="Votre pseudo" name="pseudo" value="<?php /*Si erreur, conserve le peseudo*/if(isset($pseudo)) { echo $pseudo; }?>">
                        </td>
                    </tr>
                
                    <tr>
                        <td >
                            <label for="mail">Mail :</label>
                        </td>
                        <td>
                            <input type="email" placeholder="Votre mail" name="email" value="<?php /*Si erreur, conserve le pseudo*/if(isset($mail)) { echo $mail; }?>">
                        </td>
                    </tr>
                
                    <tr>
                        <td >
                            <label for="mail2">Confirmation du Mail :</label>
                        </td>
                        <td>
                            <input type="email" placeholder="Confirmation de votre mail" name="email2" value="<?php /*Si erreur, conserve le peseudo*/if(isset($mail2)) { echo $mail2; }?>">
                        </td>
                    </tr>

                    <tr>
                        <td >
                            <label for="motdepasse">Mot de passe :</label>
                        </td>
                        <td>
                            <input type="password" placeholder="Mot de passe" name="motdepasse">
                        </td>
                    </tr>

                    <tr>
                        <td >
                            <label for="motdepasse2">Confirmation du mot de passe :</label>
                        </td>
                        <td>
                            <input type="password" placeholder="Confirmation mot de passe" name="motdepasse2">
                        </td>
                    </tr>
            </table>
            <br>
            <input type="submit" name="forminscription" value="Je m'inscris">
            </form>

            <a href="?page=home">Home</a>
            <?php
                if(isset($erreur))
                {
                    echo $erreur;
                }

            ?>
        </div>
</body>
</html>