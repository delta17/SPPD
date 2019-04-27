<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KegiatanUraian extends Model
{
  protected $table = 'mst_kegiatan_uraian';

  public function relatedKegiatanUraian(){
    $this->hasMany('mst_kegiatan_uraian','id');
  }

  public function KegiatanUraian(){
    $this->hasOne('App\KegiatanSeksi','id','kegiatan_id');
  }
}
