<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AdminSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama' => 'Dewa',
                'email' => 'dewahanggara10@gmail.com',
                'password' => password_hash('admin', PASSWORD_DEFAULT)
            ],
        ];

        $this->db->table('tbl_admin')->insertBatch($data);
    }
}
