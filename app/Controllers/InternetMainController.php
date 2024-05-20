<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class InternetMainController extends BaseController
{
    public function index()
    {
        echo view('nav/header');
        echo view('internet_main');
        echo view('nav/footer');
    }
    public function nocon()
    {
        echo view('nav/header');
        echo view('noConnect');
        echo view('nav/footer');
    }
}
