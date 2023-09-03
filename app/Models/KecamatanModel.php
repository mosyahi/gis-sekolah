<?php

namespace App\Models;

use CodeIgniter\Model;

class KecamatanModel extends Model
{
    protected $table = 'tbl_kecamatan';
    protected $primaryKey = 'id_kecamatan';
    protected $allowedFields = ['kode_kecamatan', 'nama_kecamatan'];
}