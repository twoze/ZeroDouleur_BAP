<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div id="banniere">
            <h2>Edition de mon profil</h2>
            <table>
                <form method="POST" action="">
                    <tr>
                        <td>
                            <label>Pseudo :</label>
                        </td>
                        <td>
                            <input type="text" name="newpseudo" placeholder="nouveau pseudo" value="<?php echo $_SESSION['pseudo']; ?>">
                        </td>
                    </tr>
                    <br> <br>
                    <tr>
                        <td>
                            <label>Mail :</label>
                        </td>
                        <td>
                            <input type="email" name="newmail" placeholder="nouveau mail" value="<?php echo $_SESSION['email']; ?>">
                           
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Mot de passe :</label>
                        </td>
                        <td>
                            <input type="password" name="newmdp" placeholder="nouveau mot de passe">
                        </td>
                    </tr>
                    <br> <br>
                    <tr>
                        <td>
                        </td>
                        <td>
                            <input type="submit" value="Valider la modification">
                            <br> <br>
                        </td>
                    </tr>
                </form>
            </table>
        </div>


        <?php 
    if(isset($erreur)){
        echo $erreur;
    }
    
    ?>
</body>
</html>