<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class sessionController extends Controller
{
    public function index()
    {
        return view('sesi/index');
    }
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email', // Validate that email is required and in the correct email format
            'password' => 'required'
        ], [
            'email.required' => 'Email wajib di isi',
            'email.email' => 'Format email tidak valid', // Custom error message for email format
            'password.required' => 'Password wajib di isi',
        ]);

        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($credentials)) {
            return redirect('prodak');
        } else {
            // Authentication failed
            return 'gagal';
        }
    }
}
