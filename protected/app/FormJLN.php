<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormJLN extends Model
{
    protected $table = 'mst_form_jln';

    protected $fillable = [
      'perihal'
    ];

    public function getSeksi(){
      $this->hasOne('App\Seksi','id','seksi_id');
    }

    public function getProgram(){
      $this->hasOne('App\Program','id','program_id');
    }

    public function getKegiatan(){
      $this->hasOne('App\Kegiatan','id','kegiatan_id');
    }

    public function getOutput(){
      $this->hasOne('App\Output','id','output_id');
    }

    public function getKomponen(){
      $this->hasOne('App\Komponen','id','komponen_id');
    }

    public function getSubkomponen(){
      $this->hasOne('App\Subkomponen','id','subkomponen_id');
    }

    public function getAkun(){
      $this->hasOne('App\Akun','id','akun_id');
    }

}
