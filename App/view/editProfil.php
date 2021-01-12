<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../App/css/style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <nav>
            <a href="?page=home" class="logo"><img src="../App/img/logo.svg" alt="Logo"><h1>IndoloR</h1></a>
            <button class="btn">Retour</button>
        </nav>
    </header>
    <div class="box">
        <h2>Edition de mon profil</h2>
        <form method="POST" action="">
            <label>Pseudo :</label>
            <input type="text" name="newpseudo" placeholder="nouveau pseudo" value="<?php echo $_SESSION['pseudo']; ?>">
            
            <label>Mail :</label>
            <input type="email" name="newmail" placeholder="nouveau mail" value="<?php echo $_SESSION['email']; ?>">
    
            <label>Mot de passe :</label>
            <input type="password" name="newmdp" placeholder="nouveau mot de passe">
            <input type="submit" value="Valider la modification" class="btn">
        </div>

        <?php 
    if(isset($erreur)){
        echo $erreur;
    }
    
    ?>
</body>
</html>