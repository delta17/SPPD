<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    protected $table = 'mst_perusahaan';

    public function relatedPerusahaan(){
      $this->hasMany('mst_perusahaan');
    }
}
