<?php

namespace App\Model;

use Core\Database;

//requete BDD pour la page home

class HomeModel extends Database
{
    function recup()
    {
        $reqlien = $this->query("SELECT lien FROM video");
        return($reqlien);
    }
    function insertCheckbox($checkbox){
        $reqcheckbox = $this->prepare("INSERT INTO checkbox(checkbox) VALUES('$checkbox')");
    }
}