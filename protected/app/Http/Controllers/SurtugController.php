<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SurtugController extends Controller
{
    public function showSurtugPersonal(){
      return view('buat-surtug-personal');
    }

    public function showPreviewSurtugPersonal(){
      return view('preview-surtug-personal');
    }

    public function showSurtugGrup(){
      return view('buat-surtug-grup');
    }

    public function showPreviewSurtugGrup(){
      return view('preview-surtug-grup');
    }
}
