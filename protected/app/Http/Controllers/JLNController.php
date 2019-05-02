<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JLNController extends Controller
{
    public function showJLN(){
      return view('buat-form-jln');
    }

    public function showMyJLN(){
      return view('form-jln-saya');
    }

    public function showPreviewJLN(){
      return view('preview-form-jln');
    }
}
