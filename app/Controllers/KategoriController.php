<?php

namespace App\Controllers;

class KategoriController extends BaseController
{
    public function index(): string
    {
        $data['title'] = 'Kategori';
        $data['activePage'] = 'kategori';
        return view('pages/admin/kategori/index', $data);
    }

    public function tambah(): string
    {
        $data['title'] = 'Kategori';
        $data['activePage'] = 'kategori';
        return view('pages/admin/kategori/tambah', $data);
    }
}
