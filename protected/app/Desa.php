<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Desa extends Model
{
    protected $table = 'mst_desa';

    public function relatedDesa(){
        $this->hasMany('desa','id');
    }

    public function getKecamatan(){
      return $this->hasOne('App\Kecamatan','id','kec_id');
    }
}
