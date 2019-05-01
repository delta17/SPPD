<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    protected $table='mst_agenda';

    public function getFormJLN(){
      return $this->hasOne('App\FormJLN','id','form_jln_id');
    }
}
