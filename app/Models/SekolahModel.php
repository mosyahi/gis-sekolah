<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Models\KategoriModel;

class SekolahModel extends Model
{
    protected $table = 'tbl_sekolah';
    protected $primaryKey = 'id_sekolah';
    protected $allowedFields = ['id_kategori', 'id_kecamatan', 'nama_sekolah', 'deskripsi', 'gambar', 'website', 'alamat', 'akreditas', 'jml_psb', 'jml_psb_zonasi', 'latitude', 'longitude'];

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

    public function getKecamatanOptions()
    {
        $kecamatanModel = new KecamatanModel();
        $kecamatan = $kecamatanModel->findAll();

        $options = [];
        foreach ($kecamatan as $row) {
            $kecamatan_label = $row['kode_kecamatan'] . ' - ' . $row['nama_kecamatan'];
            $options[$row['id_kecamatan']] = $kecamatan_label;
        }

        return $options;
    }

    public function search($keyword)
    {
        return $this->like('nama_sekolah', $keyword)->findAll();
    }

}
