<?php

namespace App\Model;

use Core\Database;

class AdminModel extends Database
{

    function getLien($lien)
    {
        $reqlien = $this->prepare("INSERT INTO video (lien) VALUES('$lien')");
    }

    function getAudio($audioName, $titreAudio){
        $insertaudio = $this->prepare("INSERT INTO audio(audioName, titreAudio) VALUES('$audioName', '$titreAudio')");
    }
    function checkAudio($audioName){
        $reqaudio = $this->query("SELECT * FROM audio WHERE audioName = '$audioName'");
        return ($reqaudio);
    }
}
