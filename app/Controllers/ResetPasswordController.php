<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ResetPasswordModel;
use App\Models\UserModel;

class ResetPasswordController extends BaseController
{
    public function index(): string
    {
        $model = new ResetPasswordModel();
        $userModel = new UserModel();

        $reset = $model->findAll();

        foreach ($reset as &$item) {
            $dataAdmin = $userModel->find($item['id_admin']);
            if ($dataAdmin) {
                $item['email'] = $dataAdmin['email'];
            } else {
                $item['email'] = 'Tidak Diketahui';
            }
        }

        $data = [
            'title' => 'Data Reset',
            'reset' => $reset
        ];

        $data['activePage'] = 'reset';
        return view('pages/admin/data_reset/index', $data);
    }

    public function delete($id)
    {
        $resetModel = new ResetPasswordModel();
        $reset = $resetModel->find($id);

        if ($reset) {

            // Hapus data reset berdasarkan ID
            $resetModel->delete($id);

            // Tampilkan pesan sukses
            session()->setFlashdata('success', 'Data token reset berhasil dihapus.');
        }
        return redirect()->back();
    }
}
