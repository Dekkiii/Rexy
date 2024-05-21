<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class EmailMainController extends BaseController
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
        echo view('email_main',['userData' => $userData]);
        echo view('nav/footer');
    }

    public function ribbonView()
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
        echo view('ribbon_view',['userData' => $userData]);
        echo view('nav/footer');
    }

    public function calendarView()
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
        echo view('calendar_view',['userData' => $userData]);
        echo view('nav/footer');
    }

    public function signatureView()
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
        echo view('signature_view',['userData' => $userData]);
        echo view('nav/footer');
    }

    public function pluginsView()
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
        echo view('plugins_view',['userData' => $userData]);
        echo view('nav/footer');
    }

    public function readingView()
    { $session = \Config\Services::session();
        
        // Get user data from session
        $userData = $session->get('user');

        // Check if user data exists
        if (empty($userData)) {
            // Redirect to login page
            return redirect()->to('login');
        }

        echo view('nav/header',['userData' => $userData]);
        echo view('readingpane_view',['userData' => $userData]);
        echo view('nav/footer');
    }
}
