<?php

namespace App\Model;

use Core\Database;

// requete BDD pour la partie User


class UserModel extends Database
{

    function mailExist($mail)
    {
        $reqmail = $this->query("SELECT * FROM user WHERE email = '$mail'", true);
        return ($reqmail);
    }

    function insertUser($pseudo, $mail, $motdepasse)
    {
        $this->prepare("INSERT INTO user(pseudo, email, motdepasse) VALUES('$pseudo', '$mail', '$motdepasse')");
    }

    function existMember($mailConnect, $mdpConnect)
    {
        $requser = $this->query("SELECT * FROM user WHERE email = '$mailConnect' AND motdepasse = '$mdpConnect'");
        return ($requser);
    }
    function newpseudo($newpseudo,$sessionID ){
        $insertpseudo = $this->query("UPDATE user SET pseudo = '$newpseudo' WHERE id='$sessionID'");
        return ($insertpseudo);
    }
    function newmail($newmail,$sessionID){
        $insertmail = $this->query("UPDATE user SET email = '$newmail' WHERE id='$sessionID'");
        return ($insertmail);
    }
    function newmdp($newmdp, $sessionID){
        $insertmdp = $this->query("UPDATE user SET motdepasse = '$newmdp' WHERE id='$sessionID'");
        return ($insertmdp);
    }
    function getUser($sessionID){
        $user = $this->query("SELECT * FROM user WHERE id='$sessionID'");
        return ($user);
    }
}
