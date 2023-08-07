<?php

namespace App\Controllers;

class DashboardController extends BaseController
{
    public function index(): string
    {
        $data['title'] = 'Dashboard';
        $data['activePage'] = 'home';
        return view('pages/admin/index', $data);
    }
}
