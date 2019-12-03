<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poliklinik extends Model
{
    protected $table = "poliklinik";
    protected $fillable = ['nama_poli','slug','gedung'];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
