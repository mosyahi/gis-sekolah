<?php

namespace App\Controllers;

class LoginController extends BaseController
{
    public function index()
    {
        return view('login');
    }

    public function processLogin()
    {
        // Ambil data dari form login
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Proses validasi login di sini
        // Contoh sederhana, jika username dan password adalah "admin", redirect ke halaman dashboard
        if ($username === 'admin' && $password === 'admin') {
            session()->set('auth', true);
            return redirect()->to('template/main');
        } else {
            // Jika login gagal, kembali ke halaman login dengan pesan error
            $data['error'] = 'Username Atau Password Anda Salah';
            return view('login', $data);
        }
    }
}
