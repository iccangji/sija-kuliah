<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index(){
        return view('login', [
            'title' => 'Sistem Informasi Penjadwalan Kuliah | Login',
        ]);
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'user' => 'required',
            'password' => 'required',
         ]);

        $remember_me = $request->has('rememberMe') ? true : false; 

        if (auth()->attempt(['user' => $request->input('user'), 'password' => $request->input('password')], $remember_me)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }
        return back()->with('loginError', 'User atau Password salah');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        return redirect('/login');
    }
}
