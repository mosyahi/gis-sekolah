<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTblKecamatan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_kecamatan' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'kode_kecamatan' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
            ],
            'nama_kecamatan' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
        ]);

        $this->forge->addKey('id_kecamatan', true);
        $this->forge->createTable('tbl_kecamatan');
    }

    public function down()
    {
        $this->forge->dropTable('tbl_kecamatan');
    }
}
