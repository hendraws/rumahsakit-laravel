<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    protected $table = "dokter";
    protected $fillable = ['nip', 'nama_dokter','slug', 'spesialis', 'alamat', 'no_telp'];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
