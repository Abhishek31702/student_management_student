<?php

namespace App\Models;

use CodeIgniter\Model;

class StudentModel extends Model
{
    protected $table      = 'students';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'email'];
    protected $useTimestamps = true;

    // Optionally, you can define validation rules here as well if you need
    protected $validationRules = [
        'name' => 'required|min_length[3]',
        'email' => 'required|valid_email|is_unique[students.email]',
    ];
}
