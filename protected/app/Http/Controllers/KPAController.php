<?php

namespace App\Http\Controllers;

use App\FormJLN;
use App\MyJLN;
use App\UserJLN;
use Illuminate\Http\Request;

class KPAController extends Controller
{
  public function showApprovalJLN(){
    $myjlns = MyJLN::all();

    return view('approval-form-jln',compact('myjlns'));
  }

  public function showDetailJLN($id){
    $myjlns = MyJLN::all();
    $userjlns = UserJLN::where('jln_id',$id)->get();
    return \View::make('form-jln',compact('myjlns','userjlns'))->render();
  }

  public function inputApprovalJLN(Request $request){
    $FormJLN = FormJLN::where('id',$request->id[1])->first();
    $FormJLN->catatan_kpa = $request->catatan_kpa;
    $FormJLN->update();

    for($i=1;$i<=count($request->input('id.*'));$i++ ){
      $UserJLN = FormJLN::where('id',$request->id[$i])->first();
      $UserJLN->action = $request->action;
      $UserJLN->update();
    }

    return redirect('/approval-form-jln')->with('status','Action Berhasil Disimpan!');
  }
}
