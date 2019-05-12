<?php

namespace App\Http\Controllers;

use App\MyArsip;
use Illuminate\Http\Request;
use App\FormJLN;
use App\MyJLN;
use App\UserJLN;
use App\Agenda;
use Jenssegers\Date\Date;

class KPAController extends Controller
{
  public function showApprovalJLN(){
    $myjlns = MyJLN::all();
//    dd($myjlns);
    return view('approval-form-jln',compact('myjlns'));
  }

  public function showDetailJLN($id){
    $myjlns = MyJLN::where('id',$id)->get();
    $userjlns = UserJLN::where('jln_id',$id)->get();

    return \View::make('form-jln',compact('myjlns','userjlns','id'))->render();
  }

  public function inputApprovalJLN($id, Request $request){
    $FormJLN = FormJLN::find($id);
    $agenda = Agenda::where('form_jln_id',$id)->get();

    $action_sum = collect([]);
    $count = count($request->input('id.*'));
    if($count>1){
      for($i=1;$i<=$count;$i++ ){
        $UserJLN = UserJLN::where('id',$request->id[$i])->first();
        $UserJLN->action = $request->input('action.'.$i);
        $agenda[$i-1]->action = $request->input('action.'.$i);
        $action_sum->push($request->input('action.'.$i));
        $arsip = new MyArsip();
        $arsip->user_jln_id = $UserJLN->id;
        if($UserJLN->action == 1){
          $arsip->user_jln_id = $UserJLN->id;
        }

        $agenda[$i-1]->update();

        $no = strlen((string)$agenda[$i-1]->id);
        $date = $UserJLN->updated_at->format('m/Y');
        if($no<3){
          $UserJLN->no_surat = str_pad((string)$agenda[$i-1]->id,3,"0",STR_PAD_LEFT)."/62080/".$date;
        } else{
          $UserJLN->no_surat = $agenda[$i-1]->id."/62080/".$date;
        }

        $UserJLN->update();
      }
    } else{
      $UserJLN = UserJLN::where('id',$request->id[1])->first();
      $UserJLN->action = $request->input('action.1');
      $agenda[0]->action = $request->input('action.1');
      $action_sum->push($request->input('action.1'));
      $arsip = new MyArsip();
      $arsip->user_jln_id = $UserJLN->id;
      if($UserJLN->action == 1){
        $arsip->user_jln_id = $UserJLN->id;
      }
      $agenda[0]->update();
      $no = strlen((string)$agenda[0]->id);
      $date = $UserJLN->updated_at->format('m/Y');
      if($no<3){
        $UserJLN->no_surat = str_pad((string)$agenda[0]->id,3,"0",STR_PAD_LEFT)."/62080/".$date;
      } else{
        $UserJLN->no_surat = (string)$agenda[0]->id."/62080/".$date;
      }

      $UserJLN->update();
    }


    if(isset($request->catatan_kpa)){
      $FormJLN->catatan_kpa = $request->catatan_kpa;
    }


    if($action_sum->sum()>0){
      $FormJLN->isApproved = 1;
    }
    $FormJLN->update();

    return redirect('/approval-form-jln')->with('status','Action Berhasil Disimpan!');
  }


}
