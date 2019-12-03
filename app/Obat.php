<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    protected $table = "obat";
    protected $fillable = ['nama_obat','slug', 'keterangan'];

    public function getRouteKeyName()
    {
        return 'slug';
    }
    
    public function rekammedis()
    {
        return $this->belongsToMany(Rekammedis::class);
    }
}
