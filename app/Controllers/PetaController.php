<?php

namespace App\Controllers;

use App\Models\SekolahModel;

class PetaController extends BaseController
{
   public function index()
   {
    $model = new SekolahModel();
    $sekolahModel = $model->findAll();

    $data['sekolahJson'] = json_encode($sekolahModel);
    $data['title'] = 'Peta';
    $data['activePage'] = 'peta';

    return view('pages/admin/peta/index', $data);
}

public function search()
{
        $keyword = $this->request->getVar('keyword'); // Mendapatkan kata kunci dari query parameter
        $sekolahModel = new SekolahModel();
        $results = $sekolahModel->search($keyword); // Implementasikan metode search pada model Anda

        return $this->response->setJSON($results);
    }
}
