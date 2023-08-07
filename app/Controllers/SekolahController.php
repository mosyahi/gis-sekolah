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
        $sekolahModel = new SekolahModel();

        $fileGambar = $this->request->getFile('gambar');

        // Pindahkan file ke direktori yang diinginkan jika ada
        $sortirType = [
            'image/jpeg',
            'image/png'
        ];

        if ($fileGambar && $fileGambar->isValid() && !in_array($fileGambar->getClientMimeType(), $sortirType)) {
            return redirect()->to('admin/sekolah/tambah')->withInput()->with('gagal', 'File Gambar harus berupa JPG, atau PNG');
        }

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

        $validationRules = [
            'id_kategori' => 'required',
            'nama_sekolah' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required',
            'website' => 'required',
            'alamat' => 'required',
            'akreditas' => 'required',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
        ];

        $errorMessages = [
            'latitude.numeric' => 'Latitude harus berupa angka.',
            'longitude.numeric' => 'Longitude harus berupa angka.',
        ];

        $this->validation->setRules($validationRules, $errorMessages);

        $namaSekolah = $sekolahModel->where('nama_sekolah', $data['nama_sekolah'])->countAllResults();
        if ($namaSekolah > 0) {
            return redirect()->back()->withInput()->with('error', 'Nama Sekolah sudah ada.');
        }

        // Pindahkan file gambar ke direktori yang diinginkan jika ada
        if ($fileGambar && $fileGambar->isValid()) {
            $newFileName = $fileGambar->getRandomName();
            $fileGambar->move(ROOTPATH . 'public/uploads', $newFileName);
            $data['gambar'] = $newFileName;
        }

        $sekolahModel->insert($data);

        return redirect()->to('admin/sekolah')->with('success', 'Data Sekolah berhasil ditambahkan.');
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
