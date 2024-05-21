<?php

namespace App\Controllers;

class Home extends BaseController
{
    
    public function index()
    {  
        // Load the session library
        $session = \Config\Services::session();
        
        // Get user data from session
        $userData = $session->get('user');

        // Check if user data exists
        if (empty($userData)) {
            // Redirect to login page
            return redirect()->to('login');
        }

        // Load views and pass session data to the view
        echo view('nav/header.php', ['userData' => $userData]);
        echo view('home_view', ['userData' => $userData]);
        echo view('nav/footer.php');
    }
}
