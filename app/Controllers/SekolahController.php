<?php

namespace App\Controllers;

use App\Models\SekolahModel;

class SekolahController extends BaseController
{
    public function __construct()
    {
        helper(['form', 'url']);
        $this->validation = \Config\Services::validation();
    }


    public function index()
    {
        $sekolahModel = new SekolahModel();
        $data['sekolah'] = $sekolahModel->findAll();

        $data['title'] = 'Sekolah';
        $data['activePage'] = 'sekolah';
        return view('pages/admin/sekolah/index', $data);
    }

    public function tambah()
    {

        $sekolahModel = new SekolahModel();
        $data['kategori_options'] = $sekolahModel->getKategoriOptions();
        $data['title'] = 'Sekolah';
        $data['activePage'] = 'sekolah';

        return view('pages/admin/sekolah/tambah', $data);
    }

    public function add()
    {
        $model = new SekolahModel();

        $fileMateri = $this->request->getFile('gambar');

    // Pindahkan file ke direktori yang diinginkan jika ada
        $allowedFileTypes = [
            'image/jpeg',
            'image/png'
        ];

        if ($fileMateri && $fileMateri->isValid() && !in_array($fileMateri->getClientMimeType(), $allowedFileTypes)) {
            return redirect()->to('admin/sekolah')->withInput()->with('gagal', 'File Materi harus berupa PDF, JPG, atau PNG');
        }

        $data = [
            'id_sekolah' => $this->request->getPost('id_sekolah'),
            'id_kategori' => $this->request->getPost('id_kategori'),
            'nama_sekolah' => $this->request->getPost('nama_sekolah'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'website' => $this->request->getPost('website'),
            'alamat' => $this->request->getPost('alamat'),
            'akreditas' => $this->request->getPost('akreditas'),
            'latitude' => $this->request->getPost('latitude'),
            'longitude' => $this->request->getPost('longitude')
        ];

        // Pindahkan file materi ke direktori yang diinginkan jika ada
        if ($fileMateri && $fileMateri->isValid()) {
            $newFileName = $fileMateri->getRandomName();

            // Ganti "app" dengan nama direktori yang sesuai di aplikasi Anda
            $uploadPath = WRITEPATH . 'uploads/';

            // Pastikan direktori tujuan ada, jika belum buat direktori
            if (!is_dir($uploadPath)) {
                mkdir($uploadPath, 0777, true);
            }

            $fileMateri->move($uploadPath, $newFileName);
            $data['gambar'] = $newFileName;
        }

        $model->insert($data);

        return redirect()->to('admin/sekolah')->with('success', 'Data Materi berhasil ditambahkan.');
    }



    public function edit($id_sekolah)
    {
        $sekolahModel = new SekolahModel();
        $data['sekolah'] = $sekolahModel->find($id_sekolah);
        $data['kategori_options'] = $sekolahModel->getKategoriOptions();

        return view('admin/sekolah/edit', $data);
    }

    public function update($id_sekolah)
    {
        $sekolahModel = new SekolahModel();

        $data = [
            'id_kategori' => $this->request->getPost('id_kategori'),
            'nama_sekolah' => $this->request->getPost('nama_sekolah'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'gambar' => $this->request->getPost('gambar'),
            'website' => $this->request->getPost('website'),
            'alamat' => $this->request->getPost('alamat'),
            'akreditas' => $this->request->getPost('akreditas'),
            'latitude' => $this->request->getPost('latitude'),
            'longitude' => $this->request->getPost('longitude'),
        ];

        $sekolahModel->update($id_sekolah, $data);

        return redirect()->to(site_url('admin/sekolah'));
    }

    public function delete($id_sekolah)
    {
        $sekolahModel = new SekolahModel();
        $sekolahModel->delete($id_sekolah);

        return redirect()->to(site_url('admin/sekolah'));
    }
}
