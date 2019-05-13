<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    protected $table = 'mst_foto';

    public function getUserJLN(){
      return $this->hasOne('App\UserJLN','id','user_jln_id');
    }
}
