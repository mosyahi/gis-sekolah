<?php

namespace App\Controllers;

class PetaController extends BaseController
{
    public function index(): string
    {
        $data['title'] = 'Peta';
        $data['activePage'] = 'peta';
        return view('pages/admin/peta/index', $data);
    }
}
