<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class StudentSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name'  => 'John Doe',
                'email' => 'john.doe@example.com',
                'phone' => '1234567890',
            ],
            [
                'name'  => 'Jane Smith',
                'email' => 'jane.smith@example.com',
                'phone' => '0987654321',
            ],
        ];

        // Insert data into the "students" table
        $this->db->table('students')->insertBatch($data);
    }
}
