<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Output extends Model
{
  protected $table = 'mst_output';

  public function relatedOutput(){
    $this->hasMany('output','id');
  }
}
