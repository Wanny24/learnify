<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginPage()
    {
        return view('auth.login'); // nanti kita buat view-nya di folder auth
    }

    public function loginProcess(Request $request)
    {
        // Nanti proses login kita buat setelah UI selesai
        return "Login process belum dibuat.";
    }

    public function registerPage()
{
    return view('auth.register');
}

public function registerProcess(Request $request)
{
    // Nanti logika simpan user & validasi bisa ditambah di sini
    return "Register process belum dibuat.";
}
}


