<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class AuthController extends Controller
{
    public function login()
    {
        return view('login_page'); // Assuming the view file is named 'login_page.php'
    }
}
