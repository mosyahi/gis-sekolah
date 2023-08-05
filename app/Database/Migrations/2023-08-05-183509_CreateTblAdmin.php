<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTblAdmin extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_admin' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
        ]);

        $this->forge->addKey('id_admin', true);
        $this->forge->createTable('tbl_admin');
    }

    public function down()
    {
        $this->forge->dropTable('tbl_admin');
    }
}
