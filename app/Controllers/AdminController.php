<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\UserModel;

class AdminController extends BaseController
{
    public function index()
    {
        $model = new UserModel();
        $dataUser = $model->findAll();
        $data = [
            'title' => 'Data User',
            'dataUser' => $dataUser
        ];
        $data['activePage'] = 'administrator';
        return view('pages/admin/data_admin/index', $data);
    }

    
}
