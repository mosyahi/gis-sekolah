<?php

namespace App\Controllers;

use App\Models\SekolahModel;

class PetaController extends BaseController
{
    public function index(): string
    {
        $model = new SekolahModel();
        $sekolahModel = $model->findAll();

        $data['sekolahJson'] = json_encode($sekolahModel);
        $data['title'] = 'Peta';
        $data['activePage'] = 'peta';

        return view('pages/admin/peta/index', $data);
    }
}
