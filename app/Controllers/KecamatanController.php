<?php

namespace App\Controllers;

use App\Models\KecamatanModel;

class KecamatanController extends BaseController
{
    public function index(): string
    {
        $model = new KecamatanModel();
        $kecamatan = $model->findAll();

        $data = [
            'title' => 'Data Kecamatan',
            'kecamatan' => $kecamatan
        ];

        $data['activePage'] = 'kecamatan';
        return view('pages/admin/kecamatan/index', $data);
    }

    public function add()
    {
        $model = new KecamatanModel();

        $validationRules = [
            'kode_kecamatan' => 'required',
            'nama_kecamatan' => 'required',
        ];

        if (!$this->validate($validationRules)) {
            return redirect()->back()->withInput()->with('gagal', $this->validator->getErrors());
        }

        $data = [
            'kode_kecamatan' => $this->request->getPost('kode_kecamatan'),
            'nama_kecamatan' => $this->request->getPost('nama_kecamatan'),
        ];

        // Cek apakah ada kesamaan pada nama_kecamatan dan kode_kecamatan
        $cekKesamaan = $model->where('kode_kecamatan', $data['kode_kecamatan'])
        ->where('nama_kecamatan', $data['nama_kecamatan'])
        ->countAllResults();

        if ($cekKesamaan > 0) {
            return redirect()->to('admin/kecamatan')->withInput()->with('error', 'Kode Kecamatan dan Nama Kecamatan sudah ada.');
        }

        // Simpan data kaetgori
        $model->insert($data);

        return redirect()->to('admin/kecamatan')->with('success', 'Data Kecamatan berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $kecamatanModel = new KecamatanModel();
        $kecamatan = $userModel->find($id);

        if ($kecamatan) {
            $data['kecamatan'] = $kecamatan;
            $data['title'] = 'Edit kecamatan';
            $data['activePage'] = 'edit_kecamatan';
            return view('admin/kecamatan/edit', $data);
        }
    }

    public function update($id)
    {
        $model = new KecamatanModel();

        $data = $model->find($id);
        if (!$data) {
            return redirect()->to('admin/kecamatan')->with('error', 'Data Kecamatan tidak ditemukan');
        }

        $validation = \Config\Services::validation();
        $validation->setRules([
            'kode_kecamatan' => 'required',
            'nama_kecamatan' => 'required'
        ]);
        if (!$validation->withRequest($this->request)->run()) {
            $errors = $validation->getErrors();
            return redirect()->back()->withInput()->with('errors', $errors);
        }

        $kodeKecamatan = $this->request->getPost('kode_kecamatan');
        $namaKecamatan = $this->request->getPost('nama_kecamatan');

        $existingData = $model->where('kode_kecamatan', $kodeKecamatan)
        ->where('nama_kecamatan', $namaKecamatan)
        ->first();

        if ($existingData && $existingData['id_kecamatan'] !== $id) {
            return redirect()->to('admin/kecamatan')->with('error', 'Data sudah ada dalam database');
        }

        // Simpan data ke dalam database
        $updatedData = [
            'kode_kecamatan' => $kodeKecamatan,
            'nama_kecamatan' => $namaKecamatan
        ];
        $model->update($id, $updatedData);

        return redirect()->to('admin/kecamatan')->with('success', 'Data Kecamatan berhasil diperbarui');
    }


    // Fungsi untuk memeriksa perubahan data
    private function isDataChanged($newData, $existingData)
    {
        // Bandingkan nilai-nilai dari data baru dengan data yang ada sebelumnya
        return $newData['kode_kecamatan'] !== $existingData['kode_kecamatan'] ||
        $newData['nama_kecamatan'] !== $existingData['nama_kecamatan'];
    }

    public function delete($id)
    {
        $kecamatanModel = new KecamatanModel();
        $kecamatan = $kecamatanModel->find($id);

        if ($kecamatan) {
        // Hapus data kecamatan berdasarkan ID
            $kecamatanModel->delete($id);

        // Tampilkan pesan sukses
            session()->setFlashdata('success', 'Data Kecamatan berhasil dihapus.');
        }
        return redirect()->back();
    }
}