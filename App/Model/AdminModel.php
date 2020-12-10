<?php

namespace App\Model;

use Core\Database;

class AdminModel extends Database
{

    function getLien($lien)
    {
        $reqlien = $this->prepare("INSERT INTO video (lien) VALUES('$lien')");
    }
    function getTitreAudio($titreAudio)
    {
        $reqtitre_audio = $this->prepare("INSERT INTO audio (titreAudio) VALUES('$titreAudio')");
    }
}
