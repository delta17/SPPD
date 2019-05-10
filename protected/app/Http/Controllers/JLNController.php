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
use App\MyArsip;
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

      $kegiatans    = Kegiatan::all();
      $outputs      = Output::all();
      $komponens    = Komponen::all();
      $subkomponens = Subkomponen::all();
      $akuns        = Akun::all();
      $users        = User::all();
      $kendaraans   = Kendaraan::all();
      $uraians      = KegiatanUraian::all();
      $kegSeksis    = KegiatanSeksi::all();

      if(Auth::user()->seksi_id==1 ){
        $programs     = Program::all();
      } else {
        $programs     = Program::find(3);
      }

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
//      dd($request);
      $formJLN = new FormJLN();
      /**
       * fungsi input ke formJLN
       */
      $formJLN->perihal         = $request->perihal;
      $formJLN->seksi_id        = $request->seksi;
      $no = $request->no_seksi;
      switch ($formJLN->seksi_id){
        case 1:
          $formJLN->no_seksi = "B-".$no."/62081/05/2019";
          break;
        case 2:
          $formJLN->no_seksi = "B-".$no."/62082/05/2019";
          break;
        case 3:
          $formJLN->no_seksi = "B-".$no."/62083/05/2019";
          break;
        case 4:
          $formJLN->no_seksi = "B-".$no."/62084/05/2019";
          break;
        case 5:
          $formJLN->no_seksi = "B-".$no."/62085/05/2019";
          break;
        case 6:
          $formJLN->no_seksi = "B-".$no."/62086/05/2019";
          break;
        default:
          break;
      }

      $formJLN->program_kode      = $request->program;
      $formJLN->kegiatan_kode     = $request->kegiatan;
      $formJLN->output_kode       = $request->output;
      $formJLN->komponen_kode     = $request->komponen;
      $formJLN->subkomponen_kode  = $request->subkomponen;
      $formJLN->akun_kode         = $request->akun;
      $formJLN->mak               =
        $formJLN->program_kode.$formJLN->kegiatan_kode.$formJLN->output_kode.$formJLN->komponen_kode.$formJLN->subkomponen_kode.$formJLN->akun_kode;
      $formJLN->sisa_anggaran     = $request->sisa_anggaran;
      $formJLN->keterangan        = $request->keterangan;
      $formJLN->isPersonal        = true;

//      if($request->isPersonal == 1){
//        $formJLN->isPersonal = true;
//      }else{
//        $formJLN->isPersonal = false;
//      }
      $formJLN->save();
//      dd($formJLN);
      /**
       * fungsi input UserJLN
       */
      $user = collect([]);
      $count = count($request->input('tujuan.*'));
      for($i=1; $i<=$count;$i++) {
        $userJLN = new UserJLN();
//        $x = $request->input('uraian_id.'.$i);
        $userJLN->user_id              = 6;
//        $userJLN->nama                = $request->input('nama.'.$i);
//        $userJLN->nip                 = $request->input('nip.'.$i);
        $userJLN->tgl_dari            = $request->input('tgl_dari.'.$i);
        $userJLN->tgl_sampai          = $request->input('tgl_sampai.'.$i);
//        $userJLN->uraian_id           = $x;
        $userJLN->uraian_id           = 1;

        $userJLN->tujuan_dlm          = $request->input('tujuan.'.$i);
        $userJLN->lamanya             = $request->input('lamanya.'.$i);
//        $userJLN->kendaraan_id        = $request->input('kendaraan_id.'.$i);
        $userJLN->kendaraan_id        = 1;
        $userJLN->satuan              = $request->input('satuan.'.$i);
        $userJLN->kuantitas           = $request->input('kuantitas.'.$i);
        $userJLN->jln_id              = $formJLN->id;
        $userJLN->wkt_standar_dinas   = (int)ceil(($userJLN->getTujuanDlm()->first()->waktu_tempuh*2+$userJLN->getUraianKegiatan()->first()->waktu_kegiatan*$userJLN->kuantitas)/8);
//        dd($userJLN);
        $userJLN->save();
        $user->push($userJLN->id);

        $arsip = new MyArsip();
        $arsip->user_jln_id = $userJLN->id;
        $arsip->save();
      }

      /**
       * fungsi input Agenda
       */

      if($formJLN->isPersonal){
        for($i=1;$i<=$count;$i++ ){
          $agenda = new Agenda();
          $agenda->form_jln_id = $formJLN->id;
          $agenda->perihal = collect($userJLN->find($user->toArray()[$i-1])->getUraianKegiatan()->get())->first()->uraian;
          $agenda->personal = "Personal";
          $agenda->pelaksana = collect($userJLN->find($user->toArray()[$i-1])->getUser()->get())->first()->name;
//          $agenda->pelaksana = $request->input('user_id.'.$i);
          $agenda->save();
        }
      }else{
        $agenda = new Agenda();
        $agenda->form_jln_id = $formJLN->id;
        $agenda->perihal = $formJLN->perihal;
        $agenda->personal = "Kolektif";
        $agenda->pelaksana = "--terlampir--";
        $agenda->save();
      }

      /**
       * input FormJLN_saya
       */
        $myJLN = new MyJLN();
        $myJLN->form_jln_id = $formJLN->id;
        $myJLN->user_id     = Auth::id();
        $myJLN->save();

      return redirect('/buat-form-jln')->with('status','Data Berhasil Disimpan!');
    }

    public function showMyJLN(){
      $seksi = Auth::user()->seksi_id;
      $level = Auth::user()->level_id;
      $formjln = FormJLN::all()->groupBy('seksi_id')->get($seksi);
//      $myjlns = MyJLN::getFormJLN();
//      dd($formjln);
      if($level<5)
        $formjlns = FormJLN::all();
      elseif ($level==6){
        $formjlns = FormJLN::all()->groupBy('seksi_id')->get($seksi);
      }

      return view('form-jln-saya',compact('formjlns'));
    }

    public function showPreviewJLN(){
      $seksi = Auth::user()->seksi;
      $formjlns = FormJLN::where('seksi_id',6)->get();
//      $userjlns = UserJLN::where();
//      dd($formjlns);
      return view('preview-form-jln',compact('formjlns'));
    }
}
