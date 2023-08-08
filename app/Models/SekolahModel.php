<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Models\KategoriModel;

class SekolahModel extends Model
{
    protected $table = 'tbl_sekolah';
    protected $primaryKey = 'id_sekolah';
    protected $allowedFields = ['id_kategori', 'nama_sekolah', 'deskripsi', 'gambar', 'website', 'alamat', 'akreditas', 'latitude', 'longitude'];

    public function getKategoriOptions()
    {
        $kategoriModel = new KategoriModel();
        $kategori = $kategoriModel->findAll();

        $options = [];
        foreach ($kategori as $row) {
            $kategori_label = $row['jenis_sekolah'] . ' - ' . $row['tingkatan'];
            $options[$row['id_kategori']] = $kategori_label;
        }

        return $options;
    }
}
