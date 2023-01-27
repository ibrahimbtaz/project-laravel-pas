<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    function index()
    {
        return view('login.index');
    }

    function auth(Request $request)
    {
        Session::flash('email', $request->email);
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => 'Email wajib diisi',
            'password.required' => 'Password wajib diisi',
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($infologin)) {
            // return redirect('pasien/all')->with('success', 'Berhasil Login');
            return redirect('/about')->with('success', 'Berhasil Login');
        } else {
            return redirect('/session/login/all')->withErrors('Username atau Password yang dimasukkan tidak valid !!');
        }
    }
}
