<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../App/css/style.css">
    <title>Admin</title>
</head>

<body>
    <header><!--en-tête-->
        <nav>
            <a href="?page=home" class="logo"><img src="../App/img/logo.svg" alt="Logo"><h1>IndoloR</h1></a>
            <button class="btn">Retour</button>
        </nav>
    </header>
    <div class="box"><!--formulaire d'envoie des vidéos et des audios-->
        <h1>Page admin</h1>
        <form method="POST" enctype="multipart/form-data">
        <label for="lien">Lien youtube :</label>
        <input type="text" placeholder="Votre lien" name="lien" >
                                
        <label for="titreAudio">Titre Audio :</label>             
        <input type="text" placeholder="Votre titre" name="titreAudio">     

        <div class="upload-btn">
            <button class="btn_u">Upload a file</button>
            <input type="file" placeholder="Votre audio" name="audio" accept="audio/*">
        </div>

        <input type="submit" name="formAdmin" value="Valider la modification" class="btn right">
    </div>
    </form>
</body>

</html>