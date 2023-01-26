<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Dokter;
use App\Models\Pasien;
use Illuminate\Http\Request;

class DashboardPasien extends Controller
{
    public function index()
    {
        $data_pasien = Pasien::with('dokter')->get();
        $data_dokter = Dokter::with('pasien')->get();
        return view('admin.pasien.all',compact('data_pasien','data_dokter'));
    }

    public function show (Pasien $pasien){
        return view('admin.pasien.detail',[
            "pasien" => $pasien
        ]);
    }
    public function create (){
        return view('admin.pasien.create',[
            "dokter" => Dokter::all()
        ]);
    }
    public function store (Request $request) {
        $validateData = $request->validate([
                'dokter_id' => 'required',
                'kode_pasien' => 'required|unique:pasiens',
                'nama_pasien' => 'required|max:255',
                'birthday' => 'required|date_format:Y-m-d',
                'email' => 'required',
                'alamat' => 'required',
            ]);

            Pasien::create($validateData);
            return redirect('/admin/pasien/all')->with('Successfully','Pasien Baru Berhasil Ditambahkan 1');
    }
    public function destroy (Pasien $pasien){
        Pasien::destroy($pasien->id);
        return redirect('/admin/pasien/all' )-> with('Successfully','Data berhasil dihapus !');
    }

    public function edit (Pasien $pasien) {
        return view('admin.pasien.edit', [
            'dokter' => Dokter::all(),
            'pasien'=>$pasien
        ]);
    }

    public function update (Request $request, Pasien $pasien) {
        $rules =[
                'dokter_id' => 'required',
                'nama_pasien' => 'required|max:255',
                'birthday' => 'required|date_format:Y-m-d',
                'email' => 'required',
                'alamat' => 'required',
        ];

            $validateData = $request->validate($rules);
            Pasien::where('id', $pasien->id)->update($validateData);
            return redirect('/admin/pasien/all')->with('Successfully','Data Berhasil DiUbah !');
    }

}
