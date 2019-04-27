<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KegiatanSeksi extends Model
{
    protected $table = 'mst_kegiatan_seksi';

    public function relatedKegiatanSeksi(){
      $this->hasMany('mst_kegiatan_seksi','id');
    }

    public function KegiatanSeksi(){
      $this->hasOne('App\Seksi','id','seksi_id');
    }
}
