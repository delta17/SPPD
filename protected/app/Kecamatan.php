<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
  protected $table = 'mst_kecamatan';

  public function relatedKecamatan(){
    $this->hasMany('kecamatan','id');
  }

  public function desa(){
    $this->hasOne('App\Desa', 'id', 'kec_id');
  }

}
