<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserSurtugGrup extends Model
{
    protected $table='mst_user_surtug_grup';

    public function SurtugGrup(){
      $this->hasOne('App\SurtugGrup','id','user_surtug_id');
    }
}
