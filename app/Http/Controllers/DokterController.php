<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\Pasien;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    public function index(){
        // return view('dokter.all',[
        //     "data_dokter" => Dokter::all()
        // ]);

        $data_pasien = Pasien::with('dokter')->get();
        $data_dokter = Dokter::with('pasien')->get();
        return view('dokter.all',compact('data_dokter','data_pasien'));
    }

    public function show (Dokter $dokter){
        return view('dokter.detail',[
            "dokter" => $dokter
        ]);
    }
    public function create (){
        return view('dokter.create',[
            "dokter" => Dokter::all()
        ]);
    }
    public function store (Request $request) {
        $validateData = $request->validate([
                'kode_dokter' => 'required|unique:dokters',
                'nama_dokter' => 'required|max:255',
                'keahlian' => 'required',
                'telepon' => 'required',
                'alamat' => 'required',
            ]);

            Dokter::create($validateData);
            return redirect('/dokter/all')->with('Successfully','Dokter Baru Berhasil Ditambahkan 1');
    }
    public function destroy (Dokter $dokter){
        Dokter::destroy($dokter->id);
        return redirect('/dokter/all' )-> with('Successfully','Data berhasil dihapus !');
    }

    public function edit (Dokter $dokter) {
        return view('dokter.edit', [
            'dokter'=>$dokter
        ]);
    }

    public function update (Request $request, Dokter $dokter) {
        $rules =[
            'nama_dokter' => 'required|max:255',
            'keahlian' => 'required',
            'telepon' => 'required',
            'alamat' => 'required',
        ];

            $validateData = $request->validate($rules);
            Dokter::where('id', $dokter->id)->update($validateData);
            return redirect('/dokter/all')->with('Successfully','Data Berhasil DiUbah !');
    }
}
