<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AdminSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama' => 'Administrator',
                'email' => 'ahmadrizki0704@gmail.com',
                'password' => password_hash('admin', PASSWORD_DEFAULT)
            ],
            [
                'nama' => 'Administrator 2',
                'email' => 'mochsyarifhidayat24@gmail.com',
                'password' => password_hash('admin2', PASSWORD_DEFAULT)
            ]
        ];

        $this->db->table('tbl_admin')->insertBatch($data);
    }
}
