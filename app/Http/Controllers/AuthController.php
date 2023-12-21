<?php


namespace App\Http\Controllers;

use App\Models\Login;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // Validasi data login
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Coba melakukan login
        if (Auth::attempt($credentials)) {
            // Jika berhasil, arahkan ke folder produk
            return redirect('/produk/index');
        }

        // Jika gagal, kembalikan ke halaman login
        return redirect('/login')->with('error', 'Login failed. Check your credentials.');
    }

    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        // Validasi data registrasi
        $data = $request->validate([
            'username' => 'required|unique:logins',
            'email' => 'required|email|unique:logins',
            'password' => 'required|min:6',
            'role' => 'required|in:hanchou,kakaricho,mfg_mfc,mfg_qc,gm',
        ]);

        // Buat pengguna baru
        $user = Login::create($data);

        // Loginkan pengguna baru
        Auth::login($user);

        // Arahkan ke folder produk
        return redirect('/produk/index');
    }

    public function logout()
    {
        // Logout pengguna
        Auth::logout();

        // Arahkan ke halaman login
        return redirect('/login');
    }
}
