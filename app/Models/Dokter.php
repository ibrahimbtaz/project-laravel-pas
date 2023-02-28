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

    public function scopefilter($query, array $filters){

        if(isset($filters['search']) ? $filters['search'] : false){
            $query->where('kode_dokter','like','%'.$filters['search'].'%')
                ->orWhere('nama_dokter','like','%'.$filters['search'].'%');
            // ->orWhere('telepon','like','%'.$filters['search'].'%')
            // ->orWhere('alamat','like','%'.$filters['search'].'%');
        }

        // $query->when($filters['search'] ?? false, function($query, $search){
        //     $query->where('kode_dokter','like','%'.$search.'%')
        //     ->orWhere('nama_dokter','like','%'.$search.'%')
        //     ->orWhere('alamat','like','%'.$search.'%');
        // });

        if(isset($filters['dokter_id']) ? $filters['dokter_id'] : false){
            $query->Where('id',$filters['dokter_id']);
        }

        // $query->when($filters['dokter_id'] ?? false, function($query, $dokter_id){
        //     $query->where('id',$dokter_id);
        // });
    }
}
