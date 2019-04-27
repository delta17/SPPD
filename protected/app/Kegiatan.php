<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
  protected $table = 'mst_kegiatan';

  public function relatedKegiatan(){
    $this->hasMany('kegiatan','id');
  }
}
