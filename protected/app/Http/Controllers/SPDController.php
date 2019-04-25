<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SPDController extends Controller
{
    public function showSPD(){
      return view('buat-spd');
    }

    public function showPreviewSPD(){
      return view('preview-spd');
    }
}
