<?php

namespace App\Controllers;
use App\Models\UserModel;
use App\Models\KategoriModel;
use App\Models\SekolahModel;

class DashboardController extends BaseController
{
    public function index(): string
    {
        $model = new UserModel();
        $countAdmin = $model->findAll();

        $modelKategori = new KategoriModel();
        $countKategori = $modelKategori->findAll();

        $modelSekolah = new SekolahModel();
        $countSekolah = $modelSekolah->findAll();


        $data = [
            'countAdmin' => $countAdmin,
            'countKategori' => $countKategori,
            'countSekolah' => $countSekolah,
            'title' => 'Dashboard'
        ];
        $data['activePage'] = 'home';
        return view('pages/admin/index', $data);
    }
}
