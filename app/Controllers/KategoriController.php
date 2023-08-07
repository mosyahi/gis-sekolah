<?php

namespace App\Controllers;

use App\Models\KategoriModel;

class KategoriController extends BaseController
{
    public function index(): string
    {
        $model = new KategoriModel();
        $kategori = $model->findAll();

        $data = [
            'title' => 'Data Kategori',
            'kategori' => $kategori
        ];

        $data['activePage'] = 'kategori';
        return view('pages/admin/kategori/index', $data);
    }

    public function add()
    {
        $model = new KategoriModel();

        $validationRules = [
            'jenis_sekolah' => 'required',
            'tingkatan' => 'required',
        ];

        if (!$this->validate($validationRules)) {
            return redirect()->back()->withInput()->with('gagal', $this->validator->getErrors());
        }

        $data = [
            'jenis_sekolah' => $this->request->getPost('jenis_sekolah'),
            'tingkatan' => $this->request->getPost('tingkatan'),
        ];

        // Cek apakah ada kesamaan pada tingkatan dan jenis_sekolah
        $cekKesamaan = $model->where('jenis_sekolah', $data['jenis_sekolah'])
        ->where('tingkatan', $data['tingkatan'])
        ->countAllResults();

        if ($cekKesamaan > 0) {
            return redirect()->to('admin/kategori')->withInput()->with('error', 'Jenis Sekolah dan Tingkatan sudah ada.');
        }

        // Simpan data kaetgori
        $model->insert($data);

        return redirect()->to('admin/kategori')->with('success', 'Data Kategori berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $kategoriModel = new KategoriModel();
        $kategori = $userModel->find($id);

        if ($kategori) {
            $data['kategori'] = $kategori;
            $data['title'] = 'Edit kategori';
            $data['activePage'] = 'edit_kategori';
            return view('admin/kategori/edit', $data);
        }
    }

    public function update($id)
    {
        $model = new KategoriModel();

        // Cek apakah data dengan ID yang diberikan ada dalam database
        $data = $model->find($id);
        if (!$data) {
            return redirect()->to('admin/kategori')->with('error', 'Data kategori tidak ditemukan');
        }

        // Validasi input
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'jenis_sekolah' => 'required',
            'tingkatan' => 'required'
        ]);
        if (!$validation->withRequest($this->request)->run()) {
            $errors = $validation->getErrors();
            return redirect()->back()->withInput()->with('errors', $errors);
        }

        // Ambil data dari form
        $jenisSekolah = $this->request->getPost('jenis_sekolah');
        $tingkatan = $this->request->getPost('tingkatan');

        // Cek apakah ada kesamaan pada tingkatan dan jenis_sekolah
        $cekKesamaan = $model->where('jenis_sekolah', $data['jenis_sekolah'])
        ->where('tingkatan', $data['tingkatan'])
        ->countAllResults();

        if ($cekKesamaan > 0) {
            return redirect()->to('admin/kategori')->withInput()->with('error', 'Jenis Sekolah dan Tingkatan sudah ada.');
        }

        // Simpan data ke dalam database
        $updatedData = [
            'jenis_sekolah' => $jenisSekolah,
            'tingkatan' => $tingkatan
        ];
        $model->update($id, $updatedData);

        return redirect()->to('admin/kategori')->with('success', 'Data kategori berhasil diperbarui');
    }

    // Fungsi untuk memeriksa perubahan data
    private function isDataChanged($newData, $existingData)
    {
        // Bandingkan nilai-nilai dari data baru dengan data yang ada sebelumnya
        return $newData['jenis_sekolah'] !== $existingData['jenis_sekolah'] ||
        $newData['tingkatan'] !== $existingData['tingkatan'];
    }

    public function delete($id)
    {
        $kategoriModel = new KategoriModel();
        $kategori = $kategoriModel->find($id);

        if ($kategori) {
        // Hapus data kategori berdasarkan ID
            $kategoriModel->delete($id);

        // Tampilkan pesan sukses
            session()->setFlashdata('success', 'Data kategori berhasil dihapus.');
        }
        return redirect()->back();
    }
}