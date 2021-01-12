<?php

namespace App\Model;

use Core\Database;

class HomeModel extends Database
{
    function recup()
    {
        $reqlien = $this->query("SELECT lien FROM video");
        return($reqlien);
    }
}