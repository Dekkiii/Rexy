<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class ProjectorController extends BaseController
{
    public function index()
    {
        echo view('nav/header');
        echo view('projector_view');
        echo view('nav/footer');
    }
}
