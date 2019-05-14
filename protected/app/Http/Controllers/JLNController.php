<?php

namespace App\Http\Controllers;

use App\Agenda;
use App\Desa;
use App\FormJLN;
use App\Kecamatan;
use App\Kegiatan;
use App\Akun;
use App\KegiatanSeksi;
use App\KegiatanUraian;
use App\Kendaraan;
use App\Komponen;
use App\LuarKota;
use App\MyArsip;
use App\MyJLN;
use App\Output;
use App\Program;
use App\Seksi;
use App\Subkomponen;
use App\User;
use App\UserJLN;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Jenssegers\Date\Date;
use Illuminate\Support\Facades\Input;

class JLNController extends Controller
{
    public function showJLN(){
        $seksis       = Seksi::all();
        //$subkomponens = Subkomponen::all();
        $akuns        = Akun::all();
        $users        = User::all();
        $kendaraans   = Kendaraan::all();
        //$uraians      = KegiatanUraian::all();
//        $kegSeksis    = KegiatanSeksi::all();
        $kecamatans     = Kecamatan::all();
        $luarkotas     = LuarKota::all();

        $seksi_user = Auth::user()->seksi_id;
        if($seksi_user==0){
          $programs     = Program::all();
          $kegiatans    = Kegiatan::all();
          $outputs      = Output::all();
          $komponens    = Komponen::all();
          $kegSeksis    = KegiatanSeksi::all();
        } elseif($seksi_user==1){
            $programs     = Program::all();
            $kegiatans    = Kegiatan::all();
            $outputs      = Output::where('seksi_id', 1 )->get();
            $komponens    = Komponen::where('seksi_id', 1 )->get();
            $kegSeksis    = KegiatanSeksi::where('seksi_id',1)->get();
        } else{
            $programs     = Program::find(3);
            $kegiatans    = Kegiatan::find(3);
            $outputs      = Output::where('seksi_id', $seksi_user)->get();
            $komponens    = Komponen::where('seksi_id', $seksi_user)->get();
            $kegSeksis    = KegiatanSeksi::where('seksi_id',$seksi_user)->get();
        };

        return view('buat-form-jln',compact('seksis','programs','kegiatans',
            'outputs','komponens','akuns','users','kendaraans','kegSeksis','kecamatans','luarkotas'));

    }
/*
    public function showSubKomponen($id)
    {
        $states = Subkomponen::where('komponen_id','=', $id)->get();
        return json_encode($states);
    }
*/

    public function showSubKomponen(){
        $komponens_id = Input::get('komponen_id');
        $subKomponen = Subkomponen::where('komponen_id','=', $komponens_id)->get();
        return response()->json($subKomponen);
    }

    public function showPerihalKeg(){
        $kegSeksi_id = Input::get('kegiatan_id');
        $perihalKeg = KegiatanUraian::where('kegiatan_id','=', $kegSeksi_id)->get();
        return response()->json($perihalKeg);
    }

    public function showDesa(){
        $kecamatan_id = Input::get('kec_id');
        $desa = Desa::where('kec_id','=', $kecamatan_id)->get();
        return response()->json($desa);
    }


    /**
     * Fungsi Input FormJLN dan UserJLN
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function inputJLN(Request $request){
//      dd($request);
      $validation = $request->validate([
        'no_seksi' => 'required',
        'perihal' => 'required',
        'seksi' => 'required',
        'program' => 'required',
        'kegiatan' => 'required',
        'output' => 'required',
        'komponen' => 'required',
        'akun' => 'required',
        'sisa_anggaran' => 'required',
        'user_id' => 'required',
        'tgl_dari' => 'required',
        'tgl_sampai' => 'required',
        'uraian_id' => 'required',
        'kuantitas' => 'required',
        'lamanya' => 'required',
        'kendaraan_id' => 'required',
      ]);

        $formJLN = new FormJLN();
        /**
         * fungsi input ke formJLN
         */
        $formJLN->perihal         = $request->perihal;
        $formJLN->seksi_id        = $request->seksi;
        $no = $request->no_seksi;
        $date = Date::now()->format('m/Y');
        $count = strlen((string)$no);
        if($count<3){
          $no_seksi = str_pad((string)$no,3,"0",STR_PAD_LEFT);
        } else{
          $no_seksi = $no;
        }
        switch ($formJLN->seksi_id){
            case 1:
                $formJLN->no_seksi = "B-".$no_seksi."/62081/".$date;
                break;
            case 2:
                $formJLN->no_seksi = "B-".$no_seksi."/62082/".$date;
                break;
            case 3:
                $formJLN->no_seksi = "B-".$no_seksi."/62083/".$date;
                break;
            case 4:
                $formJLN->no_seksi = "B-".$no_seksi."/62084/".$date;
                break;
            case 5:
                $formJLN->no_seksi = "B-".$no_seksi."/62085/".$date;
                break;
            case 6:
                $formJLN->no_seksi = "B-".$no_seksi."/62086/".$date;
                break;
            default:
                break;
        }

        $formJLN->program_id      = $request->program;
        $formJLN->kegiatan_id     = $request->kegiatan;
        $formJLN->output_id       = $request->output;
        $formJLN->komponen_id     = $request->komponen;
        $formJLN->subkomponen_id  = $request->subkomponen;
        $formJLN->akun_id         = $request->akun;

        if(isset($formJLN->subkomponen_id)){
          $formJLN->mak               = (string)
            $formJLN->getProgram->kode.".".$formJLN->getKegiatan->kode.".".$formJLN->getOutput->kode .".".$formJLN->getKomponen->kode.".".$formJLN->getSubkomponen->kode.".".$formJLN->getAkun->kode;
        } else{
          $formJLN->mak               = (string)
            $formJLN->getProgram->kode.".".$formJLN->getKegiatan->kode.".".$formJLN->getOutput->kode .".".$formJLN->getKomponen->kode.".".$formJLN->getAkun->kode;
        }

        $formJLN->sisa_anggaran     = $request->sisa_anggaran;
        $formJLN->keterangan        = $request->keterangan;
        $formJLN->isPersonal        = true;

//      if($request->isPersonal == 1){
//        $formJLN->isPersonal = true;
//      }else{
//        $formJLN->isPersonal = false;
//      }

        $formJLN->save();

      /**
       * fungsi input UserJLN
       */
      $user = collect([]);
      $count = count($request->input('tujuan.*'));
      for($i=1; $i<=$count;$i++) {
        $userJLN = new UserJLN();
        $x = $request->input('uraian_id.'.$i);
//        $userJLN->nama                = $request->input('nama.'.$i);
//        $userJLN->nip                 = $request->input('nip.'.$i);
        $userJLN->tgl_dari            = $request->input('tgl_dari.'.$i);
        $userJLN->tgl_sampai          = $request->input('tgl_sampai.'.$i);
        $userJLN->uraian_id           = $x;
//            $userJLN->uraian_id           = 1;
        if($request->input('tujuan.'.$i)=="null"){
          $userJLN->tujuan_dlm          = null;
        }else{
          $userJLN->tujuan_dlm          = $request->input('tujuan.'.$i);
        }
        if($request->input('tujuan_luar.'.$i)=="null"){
          $userJLN->tujuan_luar          = null;
        }else{
          $userJLN->tujuan_luar          = $request->input('tujuan_luar.'.$i);
        }
        if($request->input('tujuan_perusahaan.'.$i)=="null"){
          $userJLN->tujuan_perusahaan    = null;
        }else{
          $userJLN->tujuan_perusahaan    = $request->input('tujuan_perusahaan.'.$i);
        }
        $userJLN->lamanya             = $request->input('lamanya.'.$i);
        $userJLN->kendaraan_id        = $request->input('kendaraan_id.'.$i);
//            $userJLN->kendaraan_id        = 1;
//            $userJLN->satuan              = $request->input('satuan.'.$i);
        $userJLN->kuantitas           = $request->input('kuantitas.'.$i);
        $userJLN->user_id             = $request->input('user_id.'.$i);
        $userJLN->jln_id              = $formJLN->id;

        if(isset($userJLN->tujuan_dlm)){
          $userJLN->wkt_standar_dinas   = (int)ceil(($userJLN->getTujuanDlm()->first()->waktu_tempuh*2+$userJLN->getUraianKegiatan()->first()->waktu_kegiatan*$userJLN->kuantitas)/8);
        } elseif (isset($userJLN->tujuan_luar)){
          $userJLN->wkt_standar_dinas   = (int)ceil(($userJLN->getTujuanLuar()->first()->waktu_tempuh*2+$userJLN->getUraianKegiatan()->first()->waktu_kegiatan*$userJLN->kuantitas)/8);
        } else{
          $userJLN->wkt_standar_dinas   = (int)ceil(($userJLN->getTujuanPerusahaan()->first()->waktu_tempuh*2+$userJLN->getUraianKegiatan()->first()->waktu_kegiatan*$userJLN->kuantitas)/8);
        }


        $userJLN->save();
        $user->push($userJLN->id);

        $arsip = new MyArsip();
        $arsip->user_jln_id = $userJLN->id;
        $arsip->save();
      }

      /**
       * fungsi input Agenda
       */
      $userjln = UserJLN::where('jln_id',$formJLN->id)->get();
      if($formJLN->isPersonal){
        for($i=1;$i<=$count;$i++ ){
          $agenda = new Agenda();
          $agenda->form_jln_id = $formJLN->id;
//          $agenda->perihal = collect($userJLN->find($user->toArray()[$i-1])->getUraianKegiatan()->get())->first()->uraian;
          $agenda->perihal = $userjln[$i-1]->getUraianKegiatan->uraian;
          $agenda->personal = "Personal";
//          $agenda->pelaksana = User::find($request->input('user_id.'.$i))->first()->name;
          $agenda->pelaksana = $userjln[$i-1]->getUser->name;
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

      if($level<5)
        $formjlns = FormJLN::all();
      elseif ($level==6){
        $formjlns = FormJLN::all()->groupBy('seksi_id')->get($seksi);
      }

      return view('form-jln-saya',compact('formjlns'));
    }

    public function showPreviewJLN($id){
      $formjln  = FormJLN::find($id);
      $userjlns = UserJLN::where('jln_id',$id)->get();

      return view('preview-form-jln',compact('formjln','userjlns'));
    }
}
