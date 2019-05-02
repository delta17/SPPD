<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SPD extends Model
{
    protected $table = 'mst_spd';

    public function getUserJLN(){
      return $this->hasOne('App\UserJLN','id','user_jln_id');
    }
}
