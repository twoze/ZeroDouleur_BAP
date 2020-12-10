<?php

namespace App\Controller;

use App\Model\AdminModel;

class AdminController
{
    public function __construct()
    {
        $this->model = new AdminModel();
    }

    public function admin()
    {
        if(isset($_POST['formAdmin'])) {
            $lien = htmlspecialchars($_POST['lien']);
            $titreAudio = htmlspecialchars($_POST['titreAudio']);
            if (!empty($_POST['lien']) || !empty($_POST['titreAudio'])) {
           
            $reqlien = $this->model->getLien($lien);
            $reqtitre_audio = $this->model->getTitreAudio($titreAudio);
            }
        }
        

        require ROOT . "/App/view/admin.php";
    }
}
