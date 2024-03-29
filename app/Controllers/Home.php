<?php

namespace App\Controllers;

use App\Models\SekolahModel;
use App\Models\UserModel;

class Home extends BaseController
{
  public function index()
  {
     $model = new SekolahModel();
     $sekolahModel = $model->findAll();

     $data['sekolahJson'] = json_encode($sekolahModel);
     $data['title'] = 'Peta';
     $data['activePage'] = 'peta';

     return view('landing_pages', $data);
  }

public function maps()
{
  $model = new SekolahModel();
  $sekolahModel = $model->findAll();

  $data['sekolahJson'] = json_encode($sekolahModel);
  $data['title'] = 'Peta';
  $data['activePage'] = 'peta';

  return view('pages/maps/maps', $data);
}
}
