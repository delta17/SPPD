<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArsipController extends Controller
{
    public function showArsip(){
      return view('arsip-saya');
    }
}
