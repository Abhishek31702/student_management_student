<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class LoginController extends BaseController
{
    public function index()
    {
        return view('login_page'); // Ensure this matches the name of your view file
    }
}
