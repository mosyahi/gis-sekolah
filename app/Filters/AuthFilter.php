<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AuthFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Daftar rute yang dikecualikan dari filter otentikasi
        $exceptRoutes = [
            'login',
            '/',
            'forgot-password',
        ];

        $currentRoute = $request->uri->getPath();

        // Periksa apakah rute saat ini ada di dalam daftar rute yang dikecualikan
        if (!in_array($currentRoute, $exceptRoutes) && !session()->get('auth')) {

        // Pengecualian untuk halaman reset password
            if (strpos($currentRoute, 'reset-password') === false) {
                return redirect()->to('/login')->with('gagal', 'Anda harus login terlebih dahulu');
            }
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {

    }
}