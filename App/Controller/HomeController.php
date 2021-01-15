<?php

namespace App\Controller;


use App\Model\HomeModel;

// Conditions des requetes sur la page Home
class HomeController
{
    public function __construct()
    {
        $this->model = new HomeModel();
    }
    public function home()
    {
        $reqlien = $this->model->recup();
            $links = [];
            foreach($reqlien as $lien){
                $link = $lien->lien;
                array_push($links, $link);
                
            }

        require ROOT . "/App/view/home/home.php";
    }

// Conditions des requetes sur la page Checkbox
    public function checkbox(){
       
        if (isset($_POST['formCheckbox'])) {
            $checkbox = htmlspecialchars($_POST['checkbox']);
            
            $reqcheckbox = $this->model->insertCheckbox($checkbox);
            header('Location: ../public/?page=home');
        }
        // header("Location: ../public/?page=home");
        require ROOT . "/App/view/checkbox.php";
    }
}
