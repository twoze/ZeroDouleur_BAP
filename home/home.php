<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <a href="?page=inscription">Inscription</a>
    <a href="?page=connexion">Connexion</a>
    <a href="?page=home">Home</a>

    <?php
    if ($_SESSION) { ?>
        <a href="?page=deconnexion">Deconnexion</a>
        <a href="?page=profil">Profil</a>
        <p>Vous êtes connectés en temps que <?php echo ($_SESSION['pseudo']) ?></p>
        <?php
        if ($_SESSION['email'] == "admin@admin.com") { ?>
            <a href="?page=admin">Admin</a>
        <?php }
        ?>
    <?php }
    ?>

</body>

</html>