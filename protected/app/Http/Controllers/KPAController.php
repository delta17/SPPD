<?php

namespace App\Http\Controllers;

use App\MyArsip;
use Illuminate\Http\Request;
use App\FormJLN;
use App\MyJLN;
use App\UserJLN;
use App\Agenda;

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
    for($i=1;$i<=count($request->input('id.*'));$i++ ){
      $UserJLN = UserJLN::where('id',$request->id[$i])->first();
      $UserJLN->action = $request->input('action.'.$i);
      $agenda[$i-1]->action = $request->input('action.'.$i);
      $action_sum->push($request->input('action.'.$i));
      $UserJLN->update();
//      dd($agenda[$i-1]);
      $agenda[$i-1]->update();
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
