<?php

namespace App\Controllers;

use App\Models\LoginModel;

class Login extends BaseController
{
    public function index()
    {
        // Load the login page view
        return view('login_page');
    }public function authenticate()
    {
        // Load the LoginModel
        $loginModel = new LoginModel();
    
        // Get user input
        $name = $this->request->getPost('name');
        $department = $this->request->getPost('department');
        $ip = $_SERVER['REMOTE_ADDR'];
    
        $data = [ 'name'=>$name, 'department'=>$department, 'ip_address'=>$ip, ];
        $r = $loginModel->insert($data);
    
        if($r)
        {
            $this->session->set("user", $data);
            // If insertion is successful, redirect to home page
            return redirect()->to(base_url('home_view'));
        }
        else
        {
            // If insertion fails, display an error message
            return 'Error: Unable to login';
        }
    }
    
}
