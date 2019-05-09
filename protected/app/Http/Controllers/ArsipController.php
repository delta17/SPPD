<?php

namespace App\Http\Controllers;

use App\UserJLN;
use Illuminate\Http\Request;

class ArsipController extends Controller
{
    public function showArsip(){
      $userjlns = UserJLN::all();

      return view('arsip-saya', compact('userjlns'));
    }
}
