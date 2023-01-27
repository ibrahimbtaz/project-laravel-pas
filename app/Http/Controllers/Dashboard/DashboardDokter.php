<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Dokter;
use App\Models\Pasien;
use Illuminate\Http\Request;

class DashboardDokter extends Controller
{
    public function index(){
        // return view('dokter.all',[
        //     "data_dokter" => Dokter::all()
        // ]);

        $data_pasien = Pasien::with('dokter')->get();
        $data_dokter = Dokter::with('pasien')->get();
        return view('admin.dokter.all',compact('data_dokter','data_pasien'));
    }

    public function show (Dokter $dokter){
        return view('admin.dokter.detail',[
            "dokter" => $dokter
        ]);
    }
    public function create (){
        return view('admin.dokter.create',[
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
            ],[
                'kode_dokter.required' => 'Kode Dokter wajib diisi',
                'nama_dokter.required' => 'Nama Dokter wajib diisi',
                'keahlian.required' => 'Keahlian wajib diisi',
                'telepon.required' => 'Telepon wajib diisi',
                'alamat.required' => 'Alamt wajib diisi',
            ]);

            Dokter::create($validateData);
            return redirect('/admin/dokter/all')->with('Successfully','Dokter Baru Berhasil Ditambahkan 1');
    }
    public function destroy (Dokter $dokter){
        Dokter::destroy($dokter->id);
        return redirect('/admin/dokter/all' )-> with('Successfully','Data berhasil dihapus !');
    }

    public function edit (Dokter $dokter) {
        return view('admin.dokter.edit', [
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
            return redirect('/admin/dokter/all')->with('Successfully','Data Berhasil DiUbah !');
    }
}
