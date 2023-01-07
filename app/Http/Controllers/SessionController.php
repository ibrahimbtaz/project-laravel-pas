<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    function logout()
    {
        Auth::logout();
        return redirect('login/all')->with('success', 'Berhasil logout');
    }
}
