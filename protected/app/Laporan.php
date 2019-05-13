<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    protected $table = "mst_laporan";

    public function getUserJLN(){
      return $this->hasOne('App\Userjln','id','user_jln_id');
    }

}
