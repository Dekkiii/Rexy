<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class slowController extends BaseController
{
    public function index()
    {
        echo view('nav/header');
        echo view('slw');
        echo view('nav/footer');
    }
}
