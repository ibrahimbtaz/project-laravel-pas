<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Dokter;

class Pasien extends Model
{
    use HasFactory;

    // protected $fillable = ['dokter_id','kode_pasien','nama_pasien','birthday','alamat'];
    protected $guarded = ['id'];

    public function dokter(){
        return $this->belongsTo(Dokter::class);
    }
}
