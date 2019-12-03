<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Rekammedis extends Model
{
    protected $table = "rekammedis";
    public $incrementing = false;

    // public static function join()
    // {
    //     $data = DB::table("rekammedis")
    //     ->join('pasien','rekammedis.pasien_id','=','pasien.id')
    //     ->join('poliklinik','rekammedis.poliklinik_id','=','poliklinik.id')
    //     ->join('dokter','rekammedis.dokter_id','=','dokter.id')
    //     ->select('rekammedis.*','dokter.*','pasien.*','poliklinik.*')
    //     ->get();
    //     return $data;
    // }

    public function getRouteKeyName()
    {
        return 'id';
    }

    public function obat()
    {
        return $this->belongsToMany(Obat::class);   
    }

    public function pasien()
    {
        return $this->belongsTo(Pasien::class);
    }

    public function dokter()
    {
        return $this->belongsTo(Dokter::class);
    }

    public function poliklinik()
    {
        return $this->belongsTo(Poliklinik::class);
    }

}
