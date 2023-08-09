<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTblSekolah extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_sekolah' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'id_kategori' => [
                'constraint'     => 11,
                'type'           => 'INT',
                'unsigned'       => true,
            ],
            'nama_sekolah' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'deskripsi' => [
                'type'           => 'TEXT',
                'null'           => true,
            ],
            'gambar' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
                'null'           => true,
            ],
            'website' => [
                'type'           => 'VARCHAR',
                'constraint'     => '150',
                'null'           => true,
            ],
            'alamat' => [
                'type'           => 'TEXT',
                'null'           => true,
            ],
            'akreditas' => [
                'type'           => 'VARCHAR',
                'constraint'     => '20',
                'null'           => true,
            ],
            'latitude' => [
                'type'           => 'VARCHAR',
                'constraint'     => '50',
                'null'           => true,
            ],
            'longitude' => [
                'type'           => 'VARCHAR',
                'constraint'     => '50',
                'null'           => true,
            ],
        ]);

        $this->forge->addPrimaryKey('id_sekolah');
        $this->forge->createTable('tbl_sekolah');
        $this->forge->addForeignKey('id_kategori', 'tbl_kategori', 'id_kategori');
    }

    public function down()
    {
        $this->forge->dropTable('tbl_sekolah');
        
        // Menghapus constraint foreign key pada kolom id_kategori
        $this->forge->dropForeignKey('tbl_sekolah', 'tbl_sekolah_id_kategori_foreign');

        // Menghapus kolom id_kategori
        $this->forge->dropColumn('tbl_sekolah', 'id_kategori');
    }
}
