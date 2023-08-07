<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\ResetPasswordModel;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class AuthController extends BaseController
{
    public function index()
    {
        return view('pages/auth/login');
    }

    public function login()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $userModel = new UserModel();
        $user = $userModel->getUserByEmail($email);

        if ($user && password_verify($password, $user['password'])) {
            $session = \Config\Services::session();
            $session->set('auth', true);
            $session->set('nama', $user['nama']);

            return redirect()->to('admin/dashboard');
        }

        $session = \Config\Services::session();
        $session->setFlashdata('gagal', 'Email atau Password Anda Salah');
        return view('pages/auth/login');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }


    public function forgotPassword()
    {
        return view('pages/auth/forgot-login');
    }

    public function processForgotPassword()
    {
        $email = $this->request->getPost('email');

        $userModel = new UserModel();
        $user = $userModel->getUserByEmail($email);

        if ($user) {
            $token = bin2hex(random_bytes(32));

            date_default_timezone_set('Asia/Jakarta');

            $resetModel = new ResetPasswordModel();
            $resetModel->insert([
                'id_admin' => $user['id_admin'],
                'token' => $token,
                'expires_at' => date('Y-m-d H:i:s', strtotime('+5 minute')),
            ]);

            $resetLink = base_url('reset-password/' . $token);
            $mail = new PHPMailer(true);

            try {
                $mail = new PHPMailer();
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'koi020987@gmail.com';
                $mail->Password = 'bxreoedupmdpgpwk';
                $mail->SMTPSecure = 'tls';
                $mail->Port = 587;

                $mail->setFrom('mosyahicenter@gmail.com', 'Reset Password');
                $mail->addAddress($email);

                $mail->isHTML(true);
                $mail->Subject = 'Reset Password';
                $mail->Body    = 'Silahkan klik link berikut untuk proses reset password anda. Token akan expired dalam waktu 3 menit: <br><br>' . $resetLink;

                $mail->send();
            } catch (Exception $e) {
            }

            $session = \Config\Services::session();
            $session->setFlashdata('success', 'Email reset password telah dikirim. Silakan periksa email Anda.');
            return redirect()->to('forgot-password');
        } else {
            $session = \Config\Services::session();
            $session->setFlashdata('gagal', 'Email tidak terdaftar.');
            return redirect()->back();
        }
    }

    public function showResetForm($token)
    {
        $resetModel = new ResetPasswordModel();
        $resetData = $resetModel->getResetDataByToken($token);

        if (!$resetData) {
            return redirect()->to('login')->with('gagal', 'Token tidak ditemukan atau sudah digunakan!');
        }

        date_default_timezone_set('Asia/Jakarta');
        $expiresAt = strtotime($resetData['expires_at']);
        $currentTimestamp = time();
        if ($currentTimestamp > $expiresAt) {
            return redirect()->to('login')->with('gagal', 'Token expired karena sudah melebihi batas waktu (5 Menit).');
        }

        return view('pages/auth/reset-password', ['token' => $token]);
    }

    public function reset()
    {
        $token = $this->request->getPost('token');
        $newPassword = $this->request->getPost('new_password');
        $confirmPassword = $this->request->getPost('confirm_password');

        if ($newPassword !== $confirmPassword) {
            return redirect()->to('/reset-password/' . $token)->with('gagal', 'Password dan konfirmasi password tidak cocok.');
        }

        // Cek token valid apa engga
        $resetModel = new ResetPasswordModel();
        $resetData = $resetModel->getResetDataByToken($token);

        if (!$resetData) {
            return redirect()->to('forgot-password')->with('gagal', 'Token anda tidak ditemukan!');
        }

        date_default_timezone_set('Asia/Jakarta');
        $expiresAt = strtotime($resetData['expires_at']);
        $currentTimestamp = time();
        if ($currentTimestamp > $expiresAt) {
            return redirect()->to('login')->with('gagal', 'Token expired karena sudah melebihi batas waktu (5 Menit).');
        }

        // Update password buat user terkait
        $userModel = new UserModel();
        $user = $userModel->find($resetData['id_admin']);

        if (!$user) {
            return redirect()->to('forgot-password')->with('gagal', 'User tidak ditemukan!');
        }

        // buat update password
        $userModel->update($user['id_admin'], ['password' => password_hash($newPassword, PASSWORD_DEFAULT)]);

        // hapus token yang sudah dipake
        $resetModel->delete($resetData['id_reset_pass']);

        return redirect()->to('login')->with('success', 'Reset Password Berhasil!');
    }
}
