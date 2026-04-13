<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class logincontroller extends Controller
{
    public function authenticate(Request $request){
        $credentials = $request->validate([
            'email' => ['required','email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if (Auth::user()->role === 'admin' || $user->role === 'mitra') {
                return redirect()->intended('/backend/dashboard');
            }

            return redirect()->intended('/homepage');
        
        }

        return back()->withErrors([
            'email' => 'Email atau pasword salah',
        ])->onlyinput('email');
    }
}
