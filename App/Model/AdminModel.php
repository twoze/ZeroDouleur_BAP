<?php

namespace App\Model;

use Core\Database;

class AdminModel extends Database
{

    function getSondage($titre)
    {
        $sondage = $this->query("SELECT * FROM sondage WHERE titre='$titre'");
        return $sondage;
    }

    function getQuestion($idSondage)
    {
        $question = $this->query("SELECT * FROM sondage_questions WHERE id_sondage='$idSondage'");
        return $question;
    }

    function setSondage($titre)
    {
        $this->prepare("INSERT INTO sondage (titre) VALUES ('$titre')");
    }

    function setQuestion($idSondage, $question)
    {
        $this->prepare("INSERT INTO sondage_questions (id_sondage, titre) VALUES ('$idSondage', '$question')");
    }

    function setReponse($idQuestion, $reponse, $bool)
    {
        $this->prepare("INSERT INTO sondage_reponses (id_question, reponse, isTrue) VALUES ('$idQuestion', '$reponse', '$bool')");
    }
}
