<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class ProjectorController extends BaseController
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
        echo view('projector_view',['userData' => $userData]);
        echo view('nav/footer');
    }
}
