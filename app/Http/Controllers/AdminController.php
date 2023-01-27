<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\Pasien;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index()
    {
        return view('admin.index');
    }

}
