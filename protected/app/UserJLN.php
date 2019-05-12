<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserJLN extends Model
{
    protected $table = 'mst_user_jln';

    public function relatedUserJLN(){
      return $this->hasMany('nama','id');
    }

    public function getFormJLN(){
      return $this->hasOne('App\FormJLN','id','jln_id');
    }

    public function getUraianKegiatan(){
      return $this->hasOne('App\KegiatanUraian','id','uraian_id');
    }

    public function getUraian($key){
      return KegiatanUraian::where('uraian_id',$key)->get('uraian');
    }

    public function getKendaraan(){
      return $this->hasOne('App\Kendaraan','id','kendaraan_id');
    }

    public function getTujuanDlm(){
      return $this->hasOne('App\Desa','id','tujuan_dlm');
    }

    public function getTujuanLuar(){
      return $this->hasOne('App\LuarKota','id','tujuan_luar');
    }

    public function getTujuanPerusahaan(){
      return $this->hasOne('App\Perusahaan','id','tujuan_perusahaan');
    }

    public function getUser(){
      return $this->hasOne('App\User','id','user_id');
    }

    public function getArsip(){
      return $this->belongsTo('App\MyArsip','id','user_jln_id');
    }

    public function getLaporan(){
      return $this->hasOne('App\Laporan','id','laporan_id');
    }
}
