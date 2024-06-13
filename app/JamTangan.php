<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JamTangan extends Model
{
    protected $table = 'jamtangan';

    protected $fillable = ['merk', 'model', 'tipe', 'warna'];
}
