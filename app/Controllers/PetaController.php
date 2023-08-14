<?php

namespace App\Controllers;

use App\Models\SekolahModel;

class PetaController extends BaseController
{
   public function index()
   {
     $model = new SekolahModel();
     $sekolahModel = $model->findAll();

     $data['sekolahJson'] = json_encode($sekolahModel);
     $data['title'] = 'Peta';
     $data['activePage'] = 'peta';

     return view('pages/admin/peta/index', $data);
  }

  public function search()
  {
        $keyword = $this->request->getVar('keyword'); // Mendapatkan kata kunci dari query parameter
        $sekolahModel = new SekolahModel();
        $results = $sekolahModel->search($keyword); // Implementasikan metode search pada model Anda

        return $this->response->setJSON($results);
     }

     public function showImage($filename)
     {
      $path = FCPATH . 'uploads/' . $filename;

        if (file_exists($path)) {
        // Ambil tipe konten gambar berdasarkan ekstensi file
          $extension = pathinfo($filename, PATHINFO_EXTENSION);
          $contentType = mime_content_type($path);

        // Set header Content-Type sesuai dengan tipe konten
          header('Content-Type: ' . $contentType);

        // Tampilkan konten gambar
          readfile($path);
        exit(); // Penting untuk menghentikan eksekusi lebih lanjut setelah menampilkan gambar
     } else {
        // Tampilkan pesan atau lakukan tindakan lain jika file tidak ditemukan
       return 'File gambar tidak ditemukan.';
    }
 }

}
