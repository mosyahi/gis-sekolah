<?php

namespace App\Controllers;

use App\Models\SekolahModel;
use App\Models\KategoriModel;
use App\Models\KecamatanModel;

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
        $kategoriModel = new KategoriModel();
        $kecamatanModel = new KecamatanModel();

        $sekolahData = $sekolahModel->findAll();

        foreach ($sekolahData as &$item) {
            $kecamatan = $kecamatanModel->find($item['id_kecamatan']);
            if ($kecamatan) {
                $item['kode_kecamatan'] = $kecamatan['kode_kecamatan'];
                $item['nama_kecamatan'] = $kecamatan['nama_kecamatan'];
            } else {
                $item['kode_kecamatan'] = 'Tidak Diketahui';
                $item['nama_kecamatan'] = 'Tidak Diketahui';
            }
        }

        foreach ($sekolahData as &$item) {
            $kategori = $kategoriModel->find($item['id_kategori']);
            if ($kategori) {
                $item['jenis_sekolah'] = $kategori['jenis_sekolah'];
                $item['tingkatan'] = $kategori['tingkatan'];
            } else {
                $item['jenis_sekolah'] = 'Tidak Diketahui';
                $item['tingkatan'] = 'Tidak Diketahui';
            }
        }

        $data['sekolah'] = $sekolahData;
        $data['title'] = 'Sekolah';
        $data['activePage'] = 'sekolah';
        return view('pages/admin/sekolah/index', $data);
    }


    public function tambah()
    {

        $sekolahModel = new SekolahModel();
        $data['kategori_options'] = $sekolahModel->getKategoriOptions();
        $data['kecamatan_options'] = $sekolahModel->getKecamatanOptions();
        $data['title'] = 'Tambah Sekolah';
        $data['activePage'] = 'tambah_sekolah';

        return view('pages/admin/sekolah/tambah', $data);
    }

    public function add()
    {
        $sekolahModel = new SekolahModel();

        // Mengambil gambar yang diunggah
        $gambar = $this->request->getFile('gambar');

        // Lakukan validasi tipe file
        if ($gambar->isValid() && !$gambar->hasMoved() && in_array($gambar->getClientMimeType(), ['image/jpeg', 'image/png'])) {
            $newName = $gambar->getRandomName();
            $gambar->move('uploads', $newName);

                // Data yang akan disimpan ke database
            $data = [
                'id_kategori' => $this->request->getPost('id_kategori'),
                'id_kecamatan' => $this->request->getPost('id_kecamatan'),
                'nama_sekolah' => $this->request->getPost('nama_sekolah'),
                'deskripsi' => $this->request->getPost('deskripsi'),
                'gambar' => $newName,
                'website' => $this->request->getPost('website'),
                'alamat' => $this->request->getPost('alamat'),
                'akreditas' => $this->request->getPost('akreditas'),
                'jml_psb' => $this->request->getPost('jml_psb'),
                'jml_psb_zonasi' => $this->request->getPost('jml_psb_zonasi'),
                'latitude' => $this->request->getPost('latitude'),
                'longitude' => $this->request->getPost('longitude'),
            ];

            // Nama sekolah bli oli pada
            $existingSchool = $sekolahModel->where('nama_sekolah', $data['nama_sekolah'])->first();
            if ($existingSchool) {
                return redirect()->to(site_url('admin/sekolah'))->with('error', 'Nama sekolah sudah ada dalam database.');
            }

                // Simpan data ke database
            $sekolahModel->insert($data);

            return redirect()->to(site_url('admin/sekolah'))->with('success', 'Data sekolah berhasil ditambahkan.');
        } else {
            return redirect()->to(site_url('admin/sekolah'))->with('error', 'Gagal mengunggah gambar. Pastikan Anda mengunggah file gambar (JPEG atau PNG.).');
        }
    }


    public function edit($id_sekolah)
    {
        $sekolahModel = new SekolahModel();
        $data['sekolah'] = $sekolahModel->find($id_sekolah);
        $data['kategori_options'] = $sekolahModel->getKategoriOptions();
        $data['kecamatan_options'] = $sekolahModel->getKecamatanOptions();
        $data['title'] = 'Edit Sekolah';
        $data['activePage'] = 'edit_sekolah';

        return view('pages/admin/sekolah/edit', $data);
    }

    public function update($id)
    {
        $sekolahModel = new SekolahModel();

        // Mengambil data sekolah berdasarkan ID
        $sekolah = $sekolahModel->find($id);

        if (!$sekolah) {
            return redirect()->to(site_url('admin/sekolah'))->with('error', 'Data sekolah tidak ditemukan.');
        }

        // Mengambil gambar yang diunggah
        $gambar = $this->request->getFile('gambar');

        // Lakukan validasi tipe file
        if ($gambar->isValid() && !$gambar->hasMoved() && in_array($gambar->getClientMimeType(), ['image/jpeg', 'image/png'])) {

            // Hapus gambar lama jika ada
            if (!empty($sekolah['gambar'])) {
                unlink('uploads/' . $sekolah['gambar']);
            }

            $newName = $gambar->getRandomName();
            $gambar->move('uploads', $newName);

            // Data yang akan diupdate ke database
            $data = [
                'id_kategori' => $this->request->getPost('id_kategori'),
                'id_kecamatan' => $this->request->getPost('id_kecamatan'),
                'nama_sekolah' => $this->request->getPost('nama_sekolah'),
                'deskripsi' => $this->request->getPost('deskripsi'),
                'gambar' => $newName,
                'website' => $this->request->getPost('website'),
                'alamat' => $this->request->getPost('alamat'),
                'akreditas' => $this->request->getPost('akreditas'),
                'jml_psb' => $this->request->getPost('jml_psb'),
                'jml_psb_zonasi' => $this->request->getPost('jml_psb_zonasi'),
                'latitude' => $this->request->getPost('latitude'),
                'longitude' => $this->request->getPost('longitude'),
            ];
        } else {
            // Data yang akan diupdate ke database without the 'gambar' field
            $data = [
                'id_kategori' => $this->request->getPost('id_kategori'),
                'id_kecamatan' => $this->request->getPost('id_kecamatan'),
                'nama_sekolah' => $this->request->getPost('nama_sekolah'),
                'deskripsi' => $this->request->getPost('deskripsi'),
                'website' => $this->request->getPost('website'),
                'alamat' => $this->request->getPost('alamat'),
                'akreditas' => $this->request->getPost('akreditas'),
                'jml_psb' => $this->request->getPost('jml_psb'),
                'jml_psb_zonasi' => $this->request->getPost('jml_psb_zonasi'),
                'latitude' => $this->request->getPost('latitude'),
                'longitude' => $this->request->getPost('longitude'),
            ];
        }

        // nama gabole sama
        $existingSchool = $sekolahModel->where('nama_sekolah', $data['nama_sekolah'])->first();
        if ($existingSchool && $existingSchool['id_sekolah'] !== $id) {
            return redirect()->to(site_url('admin/sekolah'))->with('error', 'Nama sekolah sudah ada dalam database.');
        }

        // Update data ke database
        $sekolahModel->update($id, $data);

        return redirect()->to(site_url('admin/sekolah'))->with('success', 'Data sekolah berhasil diperbarui.');
    }

    public function delete($id)
    {
        $sekolahModel = new SekolahModel();
        $sekolah = $sekolahModel->find($id);

        if (!$sekolah) {
            return redirect()->to(site_url('admin/sekolah'))->with('error', 'Data sekolah tidak ditemukan.');
        }

        // Hapus gambar terkait jika ada
        $gambarPath = 'uploads/' . $sekolah['gambar'];
        if (file_exists($gambarPath)) {
            unlink($gambarPath);
        }

        // Hapus data dari database
        $sekolahModel->delete($id);

        return redirect()->to(site_url('admin/sekolah'))->with('success', 'Data sekolah berhasil dihapus.');
    }



}
