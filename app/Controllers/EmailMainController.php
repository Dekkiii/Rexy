<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class EmailMainController extends BaseController
{
    public function index()
    {
        echo view('nav/header');
        echo view('email_main');
        echo view('nav/footer');
    }

    public function ribbonView()
    {
        echo view('nav/header');
        echo view('ribbon_view');
        echo view('nav/footer');
    }

    public function calendarView()
    {
        echo view('nav/header');
        echo view('calendar_view');
        echo view('nav/footer');
    }

    public function signatureView()
    {
        echo view('nav/header');
        echo view('signature_view');
        echo view('nav/footer');
    }

    public function pluginsView()
    {
        echo view('nav/header');
        echo view('plugins_view');
        echo view('nav/footer');
    }

    public function readingView()
    {
        echo view('nav/header');
        echo view('readingpane_view');
        echo view('nav/footer');
    }
}
