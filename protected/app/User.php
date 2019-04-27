<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'users';

    protected $fillable = [
        'name', 'nip','email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function relatedUser(){
      $this->hasMany('name','id');
    }

<<<<<<< HEAD
  public function level(){
    return $this->hasOne('App\Level_user','id','level_id');
  }

  public function seksi(){
    return $this->hasOne('App\Seksi','id','seksi_id');
  }
=======
    public function level(){
      return $this->hasOne('App\Level_user','id','level_id');
    }

    public function seksi(){
      return $this->hasOne('App\Seksi','id','seksi_id');
    }
>>>>>>> 1db41b70169be00a77d73d1c20336881500ebdf1
}
