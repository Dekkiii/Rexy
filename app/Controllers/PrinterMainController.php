<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class PrinterMainController extends BaseController
{
    public function index()
    {
        echo view('nav/header');
        echo view('printer_main');
        echo view('nav/footer');
    }

    public function noShow()
    {
        echo view('nav/header');
        echo view('printer_noshow_view');
        echo view('nav/footer');
    }

    public function bnw()
    {
        echo view('nav/header');
        echo view('printer_bnw');
        echo view('nav/footer');
    }

    public function paperjam()
    {
        echo view('nav/header');
        echo view('printer_paperjam');
        echo view('nav/footer');
    }

    public function size()
    {
        echo view('nav/header');
        echo view('printer_size');
        echo view('nav/footer');
    }

    public function tray()
    {
        echo view('nav/header');
        echo view('printer_tray');
        echo view('nav/footer');
    }

    public function acc()
    {
        echo view('nav/header');
        echo view('printer_acc');
        echo view('nav/footer');
    }
}
