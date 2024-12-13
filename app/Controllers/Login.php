<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        return view('login');  // Make sure there is a corresponding view file
    }
}
