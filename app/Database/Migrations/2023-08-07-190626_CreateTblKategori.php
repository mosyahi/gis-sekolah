<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTblKategori extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_kategori' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'jenis_sekolah' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
            ],
            'tingkatan' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
            ],
        ]);

        $this->forge->addKey('id_kategori', true);
        $this->forge->createTable('tbl_kategori');
    }

    public function down()
    {
        $this->forge->dropTable('tbl_kategori');
    }
}
