<?php

namespace App\Http\Controllers;

use App\Laporan;
use App\UserJLN;
use App\Foto;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function showBuatLaporan($id)
    {
        $userjln = UserJLN::find($id);
//        dd($userJLN);

        return \View::make('buat-laporan-spd',compact('userjln','id'))->render();
    }

    public function update($id, Request $request){
      $request->validate([
        'hasil'       => 'required',
        'kesimpulan'  => 'required',
        'penutup'     => 'required',
        'foto'        => 'required',
      ]);

//      dd($id);

//      $laporan = new Laporan();
//      $laporan->id          = $id;
//      $laporan->hasil       = $request->hasil;
//      $laporan->kesimpulan  = $request->kesimpulan;
//      $laporan->penutup     = $request->penutup;
//      $laporan->user_jln_id = $id;
//      $laporan->save();

      $userjln              = UserJLN::find($id)->first();
      $userjln->hasil       = $request->hasil;
      $userjln->kesimpulan  = $request->kesimpulan;
      $userjln->penutup     = $request->penutup;
      $userjln->update();

      $count = count($request->foto);
      if($count>1){
        for($i=0; $i<$count; $i++){
          $foto = new Foto();
          $foto->user_jln_id_id = $userjln->id;
          $file = $request->file('foto.'.$i);
          $filename = $foto->user_jln_id.'.'.$file->getClientOriginalExtension();
          $file->storeAs('dokumentasi', $filename);
          $foto->foto = $filename;
//          dd($foto);
          $foto->save();
        }
      } else{
        $foto = new Foto();
        $foto->user_jln_id = $userjln->id;
        $file = $request->file('foto.0');
        $filename = $foto->user_jln_id.'.'.$file->getClientOriginalExtension();
        $file->storeAs('dokumentasi', $filename);
        $foto->foto = $filename;
//        dd($foto);
        $foto->save();
      }

      return redirect('/arsip-saya')->with('status','Data Berhasil Disimpan!');
    }

    public function showPreviewLaporan($id){
      $userjln = UserJLN::find($id)->get();

      return \View::make('preview-laporan',compact('userjln'))->render();
    }
}
