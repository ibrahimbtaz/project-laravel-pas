<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function index(){
        // return view('pasien.all',[
        //     "data_pasien" => Pasien::all()
        // ]);

        $data_pasien = Pasien::with('dokter')->get();
        $data_dokter = Dokter::with('pasien')->get();
        return view('pasien.all',compact('data_pasien','data_dokter'));
    }
    public function show (Pasien $pasien){
        return view('pasien.detail',[
            "pasien" => $pasien
        ]);
    }
    public function create (){
        return view('pasien.create',[
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
            return redirect('/pasien/all')->with('Successfully','Pasien Baru Berhasil Ditambahkan 1');
    }
    public function destroy (Pasien $pasien){
        Pasien::destroy($pasien->id);
        return redirect('/pasien/all' )-> with('Successfully','Data berhasil dihapus !');
    }

    public function edit (Pasien $pasien) {
        return view('pasien.edit', [
            'dokter' => Dokter::all(),
            'pasien'=>$pasien
        ]);
    }

    public function update (Request $request, Pasien $pasien) {
        $rules =[
                'dokter_id' => 'required',
                'nama_pasien' => 'required|max:255',
                'birthday' => 'required|date_format:d-m-Y',
                'email' => 'required',
                'alamat' => 'required',
        ];

            $validateData = $request->validate($rules);
            Pasien::where('id', $pasien->id)->update($validateData);
            return redirect('/pasien/all')->with('Successfully','Data Berhasil DiUbah !');
    }
}
