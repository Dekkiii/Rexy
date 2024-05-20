<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class LaptopMainController extends BaseController
{
    public function index()
    {
        echo view('nav/header');
        echo view('laptop_main');
        echo view('nav/footer');
    }

    public function touchpad()
    {
        echo view('nav/header');
        echo view('touchpad_view');
        echo view('nav/footer');
    }

    public function audio()
    {
        echo view('nav/header');
        echo view('audio_view');
        echo view('nav/footer');
    }

    public function hinge()
    {
        echo view('nav/header');
        echo view('hinge_view');
        echo view('nav/footer');
    }
    
    public function bsod()
    {
        echo view('nav/header');
        echo view('bsod_view');
        echo view('nav/footer');
    }
    
    public function blank()
    {
        echo view('nav/header');
        echo view('blank_screen_view');
        echo view('nav/footer');
    }
}
