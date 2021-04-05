<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:warga')->except('logout');
        $this->middleware('guest:petugas')->except('logout');
    }

    public function view_login()
    {
        return view('templates.login');
    }

    public function login_handler(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        
        if(Auth::guard('petugas')->attempt($request->only('email', 'password'))) {
            $user = Auth::guard('petugas')->user();
            if ($user->level == "Admin") {
                return redirect('/dashboard');
            } elseif ($user->level == "Petugas") {
                return redirect('/petugas');
            }
        } elseif (Auth::guard('warga')->attempt($request->only('email', 'password'))) {
                // dd(auth()->guard('warga')->user());
                return redirect('/');
        } else return redirect('/login')->with('danger', 'Email atau Password anda salah');
    }

    public function logout()
    {
        if(Auth::guard('petugas')->check()) {
            Auth::guard('petugas')->logout();
            return redirect('/login')->with('danger', 'Anda berhasil logout');
        } else if(Auth::guard('warga')->check()) {
            Auth::guard('warga')->logout();
            return redirect('/login')->with('danger', 'Anda berhasil logout');
        }
    }
}
