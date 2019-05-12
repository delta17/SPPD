<?php

namespace App\Http\Controllers;

use App\UserJLN;
use Illuminate\Http\Request;

class SPDController extends Controller
{
    public function showSPD(){
      return view('buat-spd');
    }

    public function showPreviewSPD($id){
      $userjln = UserJLN::find($id);
//      dd($userjln);
      return \View::make('preview-spd',compact('userjln'));
    }
}
