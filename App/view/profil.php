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
            <a href="?page=home"><button class="btn">Retour</button></a>
        </nav>
    </header>
    <div class="box">
        <h2> <?php echo $user[0]->pseudo; ?></h2>
        <h3> <?php echo $user[0]->email; ?></h3>
        <a href="?page=editProfil">Editer ton profil |</a>
        <a href="?page=deconnexion">Deconnexion</a>
    </div>
</body>
</html>