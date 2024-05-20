<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class BlankController extends BaseController
{
    public function index()
    {
        echo view("nav/header");
        echo view("blank_screen_view");
        echo view("nav/footer");
    }
}
