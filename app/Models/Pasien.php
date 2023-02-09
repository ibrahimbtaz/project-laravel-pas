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

    public function scopefilter($query, array $filters){

        if(isset($filters['search']) ? $filters['search'] : false){
            return $query->where('kode_pasien', 'like', '%' . $filters['search'] . '%')
                ->orWhere('nama_pasien', 'like', '%' . $filters['search'] . '%')
                ->onwhere('birthday', $filters['search'])
                ->onwhere('email', $filters['search'])
                ->orWhere('alamat', 'like', '%' . $filters['search'] . '%');
        }

        // $query->when($filters['search'] ?? false, function($query, $search){
        //     $query->where('kode_pasien','like','%'.$search.'%')
        //     ->orWhere('nama_pasien','like','%'.$search.'%')
        //     ->orWhere('alamat','like','%'.$search.'%');
        // });

        if(isset($filters['dokter_id']) ? $filters['dokter_id'] : false){
            return $query->where('dokter_id',$filters['dokter_id']);
        }

        // $query->when($filters['dokter_id'] ?? false, function($query, $dokter_id){
        //     $query->where('dokter_id',$dokter_id);
        // });
    }
}
