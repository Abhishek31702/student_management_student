<?php

namespace App\Controllers;

use App\Models\StudentModel;
use CodeIgniter\Controller;

class Student extends Controller
{
    public function index()
    {
        return view('student_form');
    }

    public function insert()
    {
        // Load validation library
        $validation =  \Config\Services::validation();

        // Set validation rules
        $validation->setRules([
            'name' => 'required|min_length[3]',
            'email' => 'required|valid_email|is_unique[students.email]',
        ]);

        // Check if validation passes
        if (!$validation->withRequest($this->request)->run()) {
            // Validation failed, return back with errors
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        // Validation passed, insert the data into the database
        $studentModel = new StudentModel();
        $studentModel->save([
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
        ]);

        // Redirect with success message
        return redirect()->to('/students')->with('success', 'Student added successfully.');
    }
}
