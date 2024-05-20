<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('nav/header.php');
        echo view('home_view');
        echo view('nav/footer.php');
    }
}

