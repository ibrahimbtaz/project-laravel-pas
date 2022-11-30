<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pasien;

class Dokter extends Model
{
    use HasFactory;
    protected $fillable = ['kode_dokter','nama_dokter','telepon','alamat','keahlian'];


    public function pasien(){
        return $this->hasMany(Pasien::class);
    }
}
