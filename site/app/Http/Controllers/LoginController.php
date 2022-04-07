<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
     return view('login');  
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect('/catalogue');
        }

        return back()->withErrors([
            'email' => 'Mauvais mudra',
        ]);
    }
    public function deconnexion()
    {
        Auth::logout();

        return redirect('login');
    }
}
