<?php

namespace App\Controller;


use App\Model\HomeModel;


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
}
