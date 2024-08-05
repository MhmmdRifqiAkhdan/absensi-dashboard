<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    // Metode untuk menampilkan form login
    public function showLoginForm()
    {
        return view('login.login');
    }

    // Metode untuk menangani login
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        // Dummy credentials
        $dummyEmail = 'karyawan@gmail.com';
        $dummyPassword = '123';

        if ($credentials['email'] === $dummyEmail && $credentials['password'] === $dummyPassword) {
            // Simpan data user di sesi atau di cookie jika perlu
            return redirect()->route('dashboard');
        } else {
            return redirect()->back()->withErrors(['email' => 'Email atau password salah']);
        }
    }

    // Metode untuk menangani logout
    public function logout(Request $request)
    {
        // Clear session or cookie if needed
        return redirect('/login');
    }
}
