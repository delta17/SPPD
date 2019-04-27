<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level_user extends Model
{
    protected $table = 'mst_level_user';

    public function relatedUser(){
      $this->hasMany('level','id');
    }
}
