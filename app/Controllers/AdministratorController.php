<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class AdministratorController extends BaseController
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

public function tambah()
{
    $model = new UserModel();
    $dataUser = $model->findAll();
    $data = [
        'title' => 'Form Tambah Admin',
        'dataUser' => $dataUser
    ];
    $data['activePage'] = 'tambah_administrator';
    return view('admin/data_admin/tambah', $data);
}

public function add()
{
    $nama = $this->request->getPost('nama');
    $email = $this->request->getPost('email');
    $password = $this->request->getPost('password');

        // Hash password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Buat instance model
    $userModel = new UserModel();

        // Siapkan data untuk disimpan
    $userData = [
        'nama' => $nama,
        'email' => $email,
        'password' => $hashedPassword,
    ];

    // Email admin bli oli pada
    $existingAdmin = $userModel->where('email', $userData['email'])->first();
    if ($existingAdmin) {
        return redirect()->to(site_url('admin/administrator'))->with('error', 'Email sudah ada dalam database.');
    }

    // Simpan data user
    $userModel->insert($userData);
    session()->setFlashdata('success', 'Admin berhasil ditambahkan.');
    return redirect()->to('admin/administrator');
}

public function edit($id)
{
    $userModel = new UserModel();
    $user = $userModel->find($id);

    if ($user) {
        $data['user'] = $user;
        $data['title'] = 'Edit Admin';
        $data['activePage'] = 'edit_administrator';
        return view('admin/data_admin/edit', $data);
    } else {
        return redirect()->to('admin/administrator');
    }
}

public function update($id)
{
    $nama = $this->request->getPost('nama');
    $email = $this->request->getPost('email');

    // Buat instance model
    $userModel = new UserModel();

    // Siapkan data untuk disimpan
    $userData = [
        'nama' => $nama,
        'email' => $email
    ];

    // email gabole sama
    $existingAdmin = $userModel->where('email', $userData['email'])->first();
    if ($existingAdmin && $existingAdmin['id_admin'] !== $id) {
        return redirect()->to(site_url('admin/administrator'))->with('error', 'Email sudah ada dalam database.');
    }

    // Simpan data user
    $userModel->update($id, $userData);
    session()->setFlashdata('success', 'Admin berhasil diperbaharui.');
    return redirect()->to('admin/administrator');
}

public function delete($id)
{
    $userModel = new UserModel();
    $user = $userModel->find($id);

    if ($user) {
            // Hapus data pengguna berdasarkan ID
        $userModel->delete($id);

            // Tampilkan pesan sukses
        session()->setFlashdata('success', 'Admin berhasil dihapus.');
    }

    return redirect()->back();
}
}
