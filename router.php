<?php

use App\Controller\UserController;
use App\Controller\HomeController;
use App\Controller\AdminController;


if (array_key_exists("page", $_GET)) {

    switch ($_GET["page"]) {

        case 'inscription':
            $controller = new UserController();
            $controller->inscription();

            break;
        case 'connexion':
            $controller = new UserController();
            $controller->connexion();
            break;
        case 'home':
            $controller = new HomeController();
            $controller->home();
            break;
        case 'deconnexion':
            $controller = new UserController();
            $controller->deconnexion();
        break;  
        case 'profil':
            $controller = new UserController();
            $controller->profil();
        break; 
        case 'editProfil':
            $controller = new UserController();
            $controller->editProfil();
        break;   
    }
} else {
    $controller = new HomeController();
    $controller->home();
}
