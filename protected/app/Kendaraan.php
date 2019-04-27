<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    protected $table = 'mst_jln_kendaraan';

    public function relatedKendaraan(){
      $this->hasMany('jenis','id');
    }
}
