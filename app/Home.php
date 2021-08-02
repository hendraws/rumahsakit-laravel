<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    protected $table = 'hubungikami';
    protected $fillable = ['nama', 'email', 'telepon', 'subject', 'pesan'];
}
