<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LuarKota extends Model
{
<<<<<<< HEAD
    //
=======
  protected $table = 'mst_luar_kota';

  public function relatedPerusahaan(){
    $this->hasMany('mst_luar_kota');
  }
>>>>>>> 1db41b70169be00a77d73d1c20336881500ebdf1
}
