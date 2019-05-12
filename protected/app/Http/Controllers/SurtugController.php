<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\UserJLN;

class SurtugController extends Controller
{
    public function showSurtugPersonal(){
      return view('buat-surtug-personal');
    }

    public function showPreviewSurtugPersonal($id){
      $userjln = UserJLN::find($id);

      return \View::make('preview-surtug-personal',compact('userjln'));
    }

    public function showSurtugGrup(){
      return view('buat-surtug-grup');
    }

    public function showPreviewSurtugGrup(){
      return view('preview-surtug-grup');
    }
}
