<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/ce50670627.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../App/css/home.css">
    <title>Home</title>
    
</head>

<body>
<header>
        <nav><!--en-tête-->
        <a href="?page=home" class="logo"><img src="../App/img/Logo Indolor Render.svg" alt="logo"><h1>IndoloR</h1></a>
                <?php
                if ($_SESSION) { ?>
                    <a href="?page=deconnexion">Deconnexion</a>
                    <a href="?page=profil"><img src="../App/img/profil.svg" alt=""></a>
                    <?php
                    if ($_SESSION['email'] == "admin@admin.com") { ?>
                        <a href="?page=admin">Admin</a>
                    <?php }
                    ?>
                <?php }
                ?>
        </nav>
    </header>
    <main><!--audio &vidéo -->
    <section>
            <?php

        if($_SESSION){ ?>
        <section>
        <?php
            foreach($links as $link){
            ?>
                 <!--affichage des vidéos-->
             <iframe width="278" height="215" src="<?php echo $link?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
             <?php } ?>
             </section>
             <section>
            <?php 
         $scandir = array_diff(scandir("../audio/"), array('..', '.'));
         foreach($scandir as $fichier){?>
         <!--affichage des audios-->
               <audio
                controls
                src="../audio/<?php echo $fichier ?>">
                    Your browser does not support the
                    <code>audio</code> element.
            </audio> 
         <?php } 
        }?>
        </section>
         
    </main>
 


    <footer><!--footer-->
       <h2>Contact</h2><!--contact/réseaux sociaux-->
       <section class="reseaux">
           <div><img src="../App/img/mail.svg" alt=""><a href="#">contact@indolor.fr</a></div>
           <div><img src="../App/img/instagram.svg" alt=""><a href="#">IndoloR</a></div>
           <div><img src="../App/img/linkedin.svg" alt=""><a href="#">IndoloR</a></div>
       </section>
       <section class="text">
       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
     Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
      Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
       </section>
       <section class="logo-footer"><!--footer-logo-->
           <div><h3>© IndoloR</h3><img src="../App/img/Logo Indolor Render.svg" alt="logo"></div>
       </section>
   </footer>

</body>

</html>