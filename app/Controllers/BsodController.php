<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class BsodController extends BaseController
{
    public function index()
    {
        echo view('nav/header');
        echo view('bsod_view');
        echo view('nav/footer');
    }
}
