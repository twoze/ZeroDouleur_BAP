<?php

namespace App\Controller;

use App\Model\UserModel;



class UserController
{

    public function __construct()
    {
        $this->model = new UserModel();
    }

    public function inscription()
    {
        if (isset($_POST['forminscription'])) {
            $pseudo = htmlspecialchars($_POST['pseudo']);
            $mail = htmlspecialchars($_POST['email']);
            $mail2 = htmlspecialchars($_POST['email2']);
            $motdepasse = sha1($_POST['motdepasse']);
            $motdepasse2 = sha1($_POST['motdepasse2']);

            // $motdepasse = password_hash($_POST['motdepasse'], PASSWORD_DEFAULT);
            // $motdepasse2 = password_hash($_POST['motdepasse2'], PASSWORD_DEFAULT);

            if (!empty($_POST['pseudo']) and !empty($_POST['email']) and !empty($_POST['email2']) and !empty($_POST['motdepasse']) and !empty($_POST['motdepasse2'])) {
                $pseudolength = strlen($pseudo);
                if ($pseudolength <= 255) {
                    if ($mail == $mail2) {
                        //Permet de ne pas contourner le champ mail.
                        if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
                            //Verification si mail déjà utilisé.
                            $mailexist = $this->model->mailExist($mail);
                            if ($mailexist == false) {
                                //Verification si le mot de passe est identique
                                if ($motdepasse == $motdepasse2) {

                                    $this->model->insertUser($pseudo, $mail, $motdepasse);
                                    header("Location: ../public/?page=connexion");
                                } else {
                                    $erreur = "Vos mots de passe ne correspondent pas.";
                                }
                            } else {
                                $erreur = "Adresse mail déjà utilisée.";
                            }
                        } else {
                            $erreur = "Votre adresse mail n'est pas valide.";
                        }
                    } else {
                        $erreur = "Vos adresses mails ne correspondent pas.";
                    }
                } else {
                    $erreur = "Votre pseudo ne doit pas dépasser 255 caractères.";
                }
            } else {

                $erreur = "Tous les champs doivent être complétés";
            }
        }
        require ROOT . "/App/view/user/inscription.php";
    }

    public function connexion()
    {
        if (isset($_POST['formConnect'])) {
            $mailConnect = htmlspecialchars($_POST['mailConnect']);
            $mdpConnect = sha1($_POST['mdpConnect']);
            if (!empty($_POST['mailConnect']) and !empty($_POST['mdpConnect'])) {
                $requser = $this->model->existMember($mailConnect, $mdpConnect);
                $lengh = count($requser);
                if ($lengh >= 1) {
                    
                    $_SESSION['id'] = $requser[0]->id;
                    $_SESSION['pseudo'] = $requser[0]->pseudo;
                    $_SESSION['email'] = $requser[0]->email;
                    header("Location: ../public/?page=home");
                } else {
                    $erreur = " Mauvais mail ou mot de passe";
                }
            } else {
                $erreur = "Tous les champs doivent être complétés !";
            }
        }
        require ROOT . "/App/view/user/connexion.php";
    }

    public function deconnexion()
    {
        session_destroy();
        require ROOT . "/App/view/user/deconnexion.php";
        header("Location: ../public/?page=checkbox");
    }
    public function profil()
    {
        $sessionID = $_SESSION['id'];
        $user = $this->model->getUser($sessionID);
        require ROOT . "/App/view/profil.php";
    }
    public function editProfil()
    {

            if(isset($_POST['newpseudo']) AND !empty ($_POST['newpseudo']) AND $_POST['newpseudo'] != $_SESSION['pseudo'])
            {
                $newpseudo = htmlspecialchars($_POST['newpseudo']);
                $sessionID = $_SESSION['id'];
                $insertpseudo = $this->model->newpseudo($newpseudo, $sessionID);
            
                header('Location: ../public/?page=profil');
            }
            
                if(isset($_POST['newmail']) AND !empty ($_POST['newmail']) AND $_POST['newmail'] != $_SESSION['email'])
            {
                $newmail = htmlspecialchars($_POST['newmail']);
                $sessionID = $_SESSION['id'];
                $insertmail = $this->model->newmail($newmail, $sessionID);
                
                header('Location: ../public/?page=profil');
            }
                if(isset($_POST['newmdp']) AND !empty ($_POST['newmdp']))
            {
                $newmdp = sha1($_POST['newmdp']);
                $sessionID = $_SESSION['id'];
                $insertmdp = $this->model->newmdp($newmdp, $sessionID);
                
                header('Location: ../public/?page=profil');
            }
        
        require ROOT . "/App/view/editProfil.php";
    }
}

