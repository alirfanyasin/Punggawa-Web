<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }


    public function loginPost(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ], [
            'email.required' => 'Email wajib diisi',
            'password.required' => 'Password wajib diisi'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if (Auth::user()->hasRole('super-admin')) {
                return redirect()->intended('/app/dashboard');
            }
            if (Auth::user()->hasRole('user')) {
                return redirect()->intended('/dashboard');
            }
            if (Auth::user()->hasRole('division')) {
                return redirect()->intended('/division/dashboard');
            }
        }

        return back()->withErrors([
            'message' => 'Email atau Password salah.',
        ]);
    }



    public function register()
    {
        return view('auth.register');
    }


    public function registerPost(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|min:6',
            'nim' => 'required'
        ], [
            'name.required' => 'Nama wajib diisi',
            'email.required' => 'Email wajib diisi',
            'email.unique' => 'Email sudah digunakan',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Password minimal 6 karakter',
            'nim' => 'NIM wajib diisi'
        ]);


        $user = User::create($validate);

        $user->assignRole('user');

        return redirect()->route('login');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
