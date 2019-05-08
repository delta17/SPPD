<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormJLN extends Model
{
    protected $table = 'mst_form_jln';

    public function getSeksi(){
      return $this->hasOne('App\Seksi','id','seksi_id');
    }

}
