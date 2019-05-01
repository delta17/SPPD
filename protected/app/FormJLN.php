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
      return $this->hasOne('App\Seksi','id','seksi_id');
    }

    public function getProgram(){
      return $this->hasOne('App\Program','id','program_id');
    }

    public function getKegiatan(){
      return $this->hasOne('App\Kegiatan','id','kegiatan_id');
    }

    public function getOutput(){
      return $this->hasOne('App\Output','id','output_id');
    }

    public function getKomponen(){
      return $this->hasOne('App\Komponen','id','komponen_id');
    }

    public function getSubkomponen(){
      return $this->hasOne('App\Subkomponen','id','subkomponen_id');
    }

    public function getAkun(){
      return $this->hasOne('App\Akun','id','akun_id');
    }

}
