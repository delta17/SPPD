<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyJLN extends Model
{
    protected $table='mst_jln_saya';

    public function getFormJLN(){
      return $this->hasOne('App\FormJLN','id','form_jln_id');
    }

    public function getUser(){
      return $this->hasOne('App\User','id','user_id');
    }
}
