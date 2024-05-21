<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class PrinterMainController extends BaseController
{
    public function index()
    {
        $session = \Config\Services::session();
        
        // Get user data from session
        $userData = $session->get('user');

        // Check if user data exists
        if (empty($userData)) {
            // Redirect to login page
            return redirect()->to('login');
        }

        echo view('nav/header',['userData' => $userData]);
        echo view('printer_main',['userData' => $userData]);
        echo view('nav/footer');
    }

    public function noShow()
    {
        $session = \Config\Services::session();
        
        // Get user data from session
        $userData = $session->get('user');

        // Check if user data exists
        if (empty($userData)) {
            // Redirect to login page
            return redirect()->to('login');
        }

        echo view('nav/header',['userData' => $userData]);
        echo view('printer_noshow_view',['userData' => $userData]);
        echo view('nav/footer');
    }

    public function bnw()
    {
        $session = \Config\Services::session();
        
        // Get user data from session
        $userData = $session->get('user');

        // Check if user data exists
        if (empty($userData)) {
            // Redirect to login page
            return redirect()->to('login');
        }

        echo view('nav/header',['userData' => $userData]);
        echo view('printer_bnw',['userData' => $userData]);
        echo view('nav/footer');
    }

    public function paperjam()
    {
        $session = \Config\Services::session();
        
        // Get user data from session
        $userData = $session->get('user');

        // Check if user data exists
        if (empty($userData)) {
            // Redirect to login page
            return redirect()->to('login');
        }

        echo view('nav/header',['userData' => $userData]);
        echo view('printer_paperjam',['userData' => $userData]);
        echo view('nav/footer');
    }

    public function size()
    {
        $session = \Config\Services::session();
        
        // Get user data from session
        $userData = $session->get('user');

        // Check if user data exists
        if (empty($userData)) {
            // Redirect to login page
            return redirect()->to('login');
        }

        echo view('nav/header',['userData' => $userData]);
        echo view('printer_size',['userData' => $userData]);
        echo view('nav/footer');
    }

    public function tray()
    {
        $session = \Config\Services::session();
        
        // Get user data from session
        $userData = $session->get('user');

        // Check if user data exists
        if (empty($userData)) {
            // Redirect to login page
            return redirect()->to('login');
        }

        echo view('nav/header',['userData' => $userData]);
        echo view('printer_tray',['userData' => $userData]);
        echo view('nav/footer');
    }

    public function acc()
    {
        $session = \Config\Services::session();
        
        // Get user data from session
        $userData = $session->get('user');

        // Check if user data exists
        if (empty($userData)) {
            // Redirect to login page
            return redirect()->to('login');
        }

        echo view('nav/header',['userData' => $userData]);
        echo view('printer_acc',['userData' => $userData]);
        echo view('nav/footer');
    }
}
