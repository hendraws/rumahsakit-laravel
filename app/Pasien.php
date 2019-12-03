<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    protected $table = 'pasien';
    protected $fillable = ['nik','nama','slug','jenis_kelamin','alamat','no_telp'];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function rekammedis()
    {
        return $this->hasMany(Rekammedis::class);
    }
    
}

