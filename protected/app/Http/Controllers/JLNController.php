<?php

namespace App\Http\Controllers;

use App\Kegiatan;
use App\Akun;
use App\Komponen;
use App\Output;
use App\Program;
use App\Seksi;
use App\Subkomponen;
use Illuminate\Http\Request;

class JLNController extends Controller
{
    public function showJLN(){
      $seksis       = Seksi::all();
      $programs     = Program::all();
      $kegiatans    = Kegiatan::all();
      $outputs      = Output::all();
      $komponens    = Komponen::all();
      $subkomponens = Subkomponen::all();
      $akuns        = Akun::all();

      return view('buat-form-jln',compact('seksis','programs','kegiatans',
        'outputs','komponens','subkomponens','akuns'));
    }

    public function showMyJLN(){
      return view('form-jln-saya');
    }

    public function showPreviewJLN(){
      return view('preview-form-jln');
    }
}
