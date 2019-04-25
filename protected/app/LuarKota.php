<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LuarKota extends Model
{
  protected $table = 'mst_luar_kota';

  public function relatedPerusahaan(){
    $this->hasMany('mst_luar_kota');
  }
}
