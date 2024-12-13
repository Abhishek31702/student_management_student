<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class StudentController extends Controller
{
    public function index()
    {
        return view('students/index'); // Make sure this view exists
    }

    public function create()
    {
        return view('students/create'); // Form for creating a student
    }

    public function store()
    {
        // Logic to handle the form submission and save student data
    }

    // Other methods for edit, update, delete
}
