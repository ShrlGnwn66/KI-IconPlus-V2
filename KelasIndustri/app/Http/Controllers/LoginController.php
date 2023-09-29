<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login ()
    {
        return view ('auth.login', [

        ]);
    }

    public function welcome ()
    {
        return view ('/welcome', [

        ]);
    }

    public function auth (Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email:dns'],
            'password' => ['required'],
        ]);

        // dd('berhasil');
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('home'); //link menuju user premium
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

}
