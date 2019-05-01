<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserJLN extends Model
{
    protected $table = 'mst_user_jln';

    public function relatedUserJLN(){
      $this->hasMany('nama','id');
    }

    public function FormJLN(){
      $this->hasOne('App\FormJLN','id','jln_id');
    }

    public function getUraianKegiatan(){
      return $this->hasOne('App\KegiatanUraian','id','uraian_id');
    }

    public function getUraian($key){
      return KegiatanUraian::where('uraian_id',$key)->get('uraian');
    }

    public function Kendaraan(){
      $this->hasOne('App\Kendaraan','id','kendaraan_id');
    }
}
