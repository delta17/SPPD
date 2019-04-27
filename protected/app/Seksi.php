<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seksi extends Model
{
    protected $table = 'mst_seksi';

    public function relatedSeksi(){
      $this->hasMany('seksi','id');
    }
}
