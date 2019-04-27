<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subkomponen extends Model
{
  protected $table = 'mst_subkomponen';

  public function relatedSubkomponen(){
    $this->hasMany('subkomponen','id');
  }

  public function Subkomponen(){
    $this->hasOne('App\Komponen','id','komponen_id');
  }
}
