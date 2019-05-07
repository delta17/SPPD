<?php

namespace App\Http\Controllers;

use App\Agenda;
use App\FormJLN;
use App\Kegiatan;
use App\Akun;
use App\KegiatanSeksi;
use App\KegiatanUraian;
use App\Kendaraan;
use App\Komponen;
use App\MyJLN;
use App\Output;
use App\Program;
use App\Seksi;
use App\Subkomponen;
use App\User;
use App\UserJLN;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;

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
      $users        = User::all();
      $kendaraans   = Kendaraan::all();
      $uraians      = KegiatanUraian::all();
      $kegSeksis    = KegiatanSeksi::all();
      return view('buat-form-jln',compact('seksis','programs','kegiatans',
        'outputs','komponens','subkomponens','akuns','users','kendaraans','uraians','kegSeksis'));
    }

    /**
     * Fungsi Input FormJLN dan UserJLN
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function inputJLN(Request $request){
      $formJLN = new FormJLN();

      /**
       * fungsi input ke formJLN
       */
      $formJLN->no_seksi        = $request->no_seksi;
      $formJLN->perihal         = $request->perihal;
      $formJLN->seksi_id        = $request->seksi;
      $formJLN->program_id      = $request->program;
      $formJLN->kegiatan_id     = $request->kegiatan;
      $formJLN->output_id       = $request->output;
      $formJLN->komponen_id     = $request->komponen;
      $formJLN->subkomponen_id  = $request->subkomponen;
      $formJLN->akun_id         = $request->akun;
      $formJLN->mak             = $request->mak;
      $formJLN->sisa_anggaran   = $request->sisa_anggaran;
      $formJLN->keterangan      = $request->keterangan;

      if($request->isPersonal == 1){
        $formJLN->isPersonal = true;
      }else{
        $formJLN->isPersonal = false;
      }
      $formJLN->save();

      /**
       * fungsi input UserJLN
       */
      $user = collect([]);
      for($i=1; $i<=count($request->input('nama.*'));$i++) {
        $userJLN = new UserJLN();
        $userJLN->nama          = $request->input('nama.'.$i);
        $userJLN->nip           = $request->input('nip.'.$i);
        $userJLN->tgl_dari      = $request->input('tgl_dari.'.$i);
        $userJLN->tgl_sampai    = $request->input('tgl_sampai.'.$i);
        $userJLN->uraian_id     = $request->input('uraian_id.'.$i);
        $userJLN->tujuan        = $request->input('tujuan.'.$i);
        $userJLN->lamanya       = $request->input('lamanya.'.$i);
        $userJLN->kendaraan_id  = $request->input('kendaraan_id.'.$i);
        $userJLN->jln_id        = $formJLN->id;
        $userJLN->save();
        $user->push($userJLN->id);
      }

      /**
       * fungsi input Agenda
       */

      if($formJLN->isPersonal){
        for($i=1;$i<=count($request->input('nama.*'));$i++ ){
          $agenda = new Agenda();
          $agenda->form_jln_id = $formJLN->id;
          $agenda->perihal = collect($userJLN->find($user->toArray()[$i-1])->getUraianKegiatan()->get())->first()->uraian;
          $agenda->personal = "Personal";
          $agenda->pelaksana = $request->input('nama.'.$i);
          $agenda->action = 0;
          $agenda->save();
        }
      }else{
        $agenda = new Agenda();
        $agenda->form_jln_id = $formJLN->id;
        $agenda->perihal = $formJLN->perihal;
        $agenda->personal = "Kolektif";
        $agenda->pelaksana = "--terlampir--";
        $agenda->action = 0;
        $agenda->save();
      }

      /**
       * input FormJLN_saya
       */
//      dd(Auth::id());
        $myJLN = new MyJLN();
        $myJLN->form_jln_id = $formJLN->id;
        $myJLN->user_id     = Auth::id();
        $myJLN->save();
//      dd();

      return redirect('/buat-form-jln')->with('status','Data Berhasil Disimpan!');
    }

    public function showMyJLN(){
      $myjlns = MyJLN::all();

      return view('form-jln-saya',compact('myjlns'));
    }

    public function showPreviewJLN(){
      return view('preview-form-jln');
    }

    public function showApprovalJLN(){
      $myjlns = MyJLN::all();

      return view('approval-form-jln',compact('myjlns'));
    }

    public function showDetailJLN(){
      $myjlns = MyJLN::all();

      return view('form-jln',compact('myjlns'));
    }

    public function inputApprovalJLN(Request $request){
      dd($request);

      return redirect('/approval-form-jln')->with('status','Action Berhasil Disimpan!');
    }
}
