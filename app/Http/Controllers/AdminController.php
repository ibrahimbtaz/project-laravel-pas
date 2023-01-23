<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\Pasien;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function admin()
    {
        return view('admin.index');
    }

    function pasien()
    {
        $data_pasien = Pasien::with('dokter')->get();
        $data_dokter = Dokter::with('pasien')->get();
        return view('pasien.all',compact('data_pasien','data_dokter'));
    }
    function dokter()
    {
        $data_pasien = Pasien::with('dokter')->get();
        $data_dokter = Dokter::with('pasien')->get();
        return view('dokter.all',compact('data_dokter','data_pasien'));
    }
}
