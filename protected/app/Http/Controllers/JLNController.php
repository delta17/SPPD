<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
=======
use App\Kegiatan;
use App\Akun;
use App\Komponen;
use App\Output;
use App\Program;
use App\Seksi;
use App\Subkomponen;
>>>>>>> 1db41b70169be00a77d73d1c20336881500ebdf1
use Illuminate\Http\Request;

class JLNController extends Controller
{
    public function showJLN(){
<<<<<<< HEAD
      return view('buat-form-jln');
=======
      $seksis       = Seksi::all();
      $programs     = Program::all();
      $kegiatans    = Kegiatan::all();
      $outputs      = Output::all();
      $komponens    = Komponen::all();
      $subkomponens = Subkomponen::all();
      $akuns        = Akun::all();

      return view('buat-form-jln',compact('seksis','programs','kegiatans',
        'outputs','komponens','subkomponens','akuns'));
>>>>>>> 1db41b70169be00a77d73d1c20336881500ebdf1
    }

    public function showMyJLN(){
      return view('form-jln-saya');
    }

    public function showPreviewJLN(){
      return view('preview-form-jln');
    }
}
