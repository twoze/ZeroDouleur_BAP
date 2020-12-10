<?php
define("ROOT", dirname(__DIR__));
require ROOT . "/Autoloader.php";

//Démarre une session de sauvegarde de données.
session_start();
Autoloader::register();
require ROOT . "/router.php";
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="js/main.js"></script>