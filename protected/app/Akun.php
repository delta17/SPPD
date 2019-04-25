<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Akun extends Model
{
    protected $table = 'mst_akun';

    public function relatedAkun(){
      $this->hasMany('akun','id');
    }
}
