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
            if (!empty($_POST['lien']) || !empty($_POST['titreAudio'] && !empty($_FILES))) {
                $audio = $_FILES['audio'];
                $audioName = $audio['name'];
                $ext = strtolower(substr($audioName,-3));
                $allow_ext = array('mp3','mp4');
                $reqlien = $this->model->getLien($lien);
                if(in_array($ext,$allow_ext)){
                    move_uploaded_file($audio['tmp_name'], "../audio/".$audioName);
                }
               
                else {
                    $erreur = "Votre fichier n'est pas un audio";
                }
                $dos = "../audio";
                $dir = opendir($dos);
                while($file = readdir($dir)){ 

                if(in_array($ext,$allow_ext)){
                $reqaudio = $this->model->checkAudio($audioName);
                $audioexist = count($reqaudio);
                if($audioexist === 0)
                {
                    $insertaudio = $this->model->getAudio($audioName, $titreAudio);
                    
                }
                else {
                    $erreur = "image déjà posté";
                }
            }
        }
              
     }
    }
        require ROOT . "/App/view/admin.php";
        
    }
}

