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
          $foto->user_jln_id = $userjln->id;
          $foto->save();
//          dd($request->file('foto.'.$i));
          $file = $request->file('foto.'.$i);
          $filename = $foto->id.'.'.$file->getClientOriginalExtension();
          $file->storeAs('dokumentasi', $filename,'public');
          $foto->foto = $filename;
          $foto->update();
//          dd($foto);
        }
      } else{
        $foto = new Foto();
        $foto->user_jln_id = $userjln->id;
        $foto->save();
        $file = $request->file('foto.0');
        $filename = $foto->id.'.'.$file->getClientOriginalExtension();
        $file->storeAs('dokumentasi', $filename,'public');
        $foto->foto = $filename;
        $foto->update();
//        dd($foto);
      }

      return redirect('/arsip-saya')->with('status','Data Berhasil Disimpan!');
    }

    public function showPreviewLaporan($id){
      $userjln = UserJLN::find($id)->get();
      $fotos = Foto::where('user_jln_id',$id)->get();

      return \View::make('preview-laporan',compact('userjln','fotos'))->render();
    }

}
