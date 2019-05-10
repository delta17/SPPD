<?php

namespace App\Http\Controllers;

use App\FormJLN;
use App\MyArsip;
use App\UserJLN;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArsipController extends Controller
{
    public function showArsip(){
      $level = Auth::user()->level_id;
      $seksi = Auth::user()->seksi_id;
      $user  = Auth::user()->id;

      if($level<6){
        $userjlns = UserJLN::all();
      } elseif($level==6){
        $formJLN = FormJLN::all()->groupBy('seksi_id')->get($seksi);
        $count = $formJLN->count();
        $coll = collect();
        for($i=0; $i<$count; $i++){
          $coll->push($formJLN[$i]->relatedUserJLN);
        }
        $userjlns = $coll->collapse()->all();
      }
      else{
        $userjlns = UserJLN::all()->groupBy('user_id')->get($user);
      }
//      dd($arsips->first());
      return view('arsip-saya', compact('userjlns'));
    }
}
