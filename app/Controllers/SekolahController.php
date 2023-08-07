<?php

namespace App\Controllers;

class SekolahController extends BaseController
{
    public function index(): string
    {
        $data['title'] = 'Sekolah';
        $data['activePage'] = 'sekolah';
        return view('pages/admin/sekolah/index', $data);
    }

    public function tambah(): string
    {
        $data['title'] = 'Sekolah';
        $data['activePage'] = 'sekolah';
        return view('pages/admin/sekolah/tambah', $data);
    }
}
