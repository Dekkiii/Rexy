<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class LaptopMainController extends BaseController
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
        echo view('laptop_main',['userData' => $userData]);
        echo view('nav/footer');
    }

    public function touchpad()
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
        echo view('touchpad_view',['userData' => $userData]);
        echo view('nav/footer');
    }

    public function audio()
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
        echo view('audio_view',['userData' => $userData]);
        echo view('nav/footer');
    }

    public function hinge()
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
        echo view('hinge_view',['userData' => $userData]);
        echo view('nav/footer');
    }
    
    public function bsod()
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
        echo view('bsod_view',['userData' => $userData]);
        echo view('nav/footer');
    }
    
    public function blank()
    {
        $session = \Config\Services::session();
        
        // Get user data from session
        $userData = $session->get('user');

        // Check if user data exists
        if (empty($userData)) {
            // Redirect to login page
            return redirect()->to('login');
        }

        $session = \Config\Services::session();
        
        // Get user data from session
        $userData = $session->get('user');

        // Check if user data exists
        if (empty($userData)) {
            // Redirect to login page
            return redirect()->to('login');
        }

        echo view('nav/header',['userData' => $userData]);
        echo view('blank_screen_view',['userData' => $userData]);
        echo view('nav/footer');
    }
}
