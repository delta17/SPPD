<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyArsip extends Model
{
    protected $table = 'mst_arsip_saya';

    public function getUserJLN(){
      return $this->hasOne('App\UserJLN','id','user_jln_id');
    }

    public function getSurtugPersonal(){
      return $this->hasOne('App\SurtugPersonal','id','surtug_personal_id');
    }

    public function getSurtugGrup(){
      return $this->hasOne('App\SurtugGrup','id','surtug_grup_id');
    }

    public function getSPD(){
      return $this->hasOne('App\SPD','id','spd_id');
    }
}
