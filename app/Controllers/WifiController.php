<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class WifiController extends BaseController
{
    public function index()
    {
        echo view('nav/header');
        echo view('wifi_view');
        echo view('nav/footer');
    }
}
