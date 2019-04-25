<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormJLN extends Model
{
    protected $table = 'mst_form_jln';

    public function relatedFormJLN(){
      $this->hasMany('no_seksi','id');
    }

    public function Seksi(){
      $this->hasOne('App\Seksi','id','seksi_id');
    }

    public function Program(){
      $this->hasOne('App\Program','id','program_id');
    }

    public function Kegiatan(){
      $this->hasOne('App\Kegiatan','id','kegiatan_id');
    }

    public function Output(){
      $this->hasOne('App\Output','id','output_id');
    }

    public function Komponen(){
      $this->hasOne('App\Komponen','id','komponen_id');
    }

    public function Subkomponen(){
      $this->hasOne('App\Subkomponen','id','subkomponen_id');
    }

    public function Akun(){
      $this->hasOne('App\Akun','id','akun_id');
    }


}
