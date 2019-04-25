<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
  protected $table = 'mst_program';

  public function relatedProgram(){
    $this->hasMany('program','id');
  }
}
