<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Komponen extends Model
{
  protected $table = 'mst_komponen';

  public function relatedKomponen(){
    $this->hasMany('komponen','id');
  }
}
