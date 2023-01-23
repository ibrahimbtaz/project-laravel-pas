<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    function logout()
    {
        Auth::logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/auth/all')->with('success', 'Berhasil logout');
    }
}
