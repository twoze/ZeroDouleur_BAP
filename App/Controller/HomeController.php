<?php

namespace App\Controller;

class HomeController
{

    public function home()
    {
        require ROOT . "/App/view/home/home.php";
    }
}
