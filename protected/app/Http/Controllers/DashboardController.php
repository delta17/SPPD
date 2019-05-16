<?php

namespace App\Http\Controllers;

use App\UserJLN;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
  public function showDashboard()
  {
//    $query = UserJLN::all()->groupBy('action')->get(2);
//    $count = $query->count();
////    dd($query[0]->getUser->name." melakukan ".$query[0]->getUraianKegiatan->uraian);
////    dd($query[0]->tgl_sampai);
//
//    $data = array();
//    for($i=0; $i<$count; $i++){
//      $title = $query[$i]->getUser->name." melakukan ".$query[$i]->getUraianKegiatan->uraian;
//      $data[] = array('title'=>$title,'start'=>$query[$i]->tgl_dari,'end'=>$query[$i]->tgl_sampai);
//    }
//    dd($data);
//    $data[] = array('title'=>'Lorem ipsum dolor sit amet','start'=>$year.'-'.$month.'-01','className'=>'green');
//    $data[] = array('title'=>'Lorem ipsum dolor sit amet','start'=>$year.'-'.$month.'-01','className'=>'green');
//    $data[] = array('title'=>'Donec eget ligula','start'=>$year.'-'.$month.'-03','className'=>'blue');
//    $data[] = array('title'=>'Curabitur dapibus lectus','start'=>$year.'-'.$month.'-03','className'=>'red');
//    $data[] = array('title'=>'Vivamus non','start'=>$year.'-'.$month.'-03','className'=>'orange');
//    $data[] = array('title'=>'Duis sagittis','start'=>$year.'-'.$month.'-08');
//    $data[] = array('title'=>'Nullam eget mauris','start'=>$year.'-'.$month.'-05','end'=>$year.'-'.$month.'-07','className'=>'red');
//    $data[] = array('title'=>'Proin laoreet justo nec','start'=>$year.'-'.$month.'-16','className'=>'orange');
//    $data[] = array('title'=>'Ut faucibus sapien','start'=>date("Y-m-d"));
//    $data[] = array('title'=>'Donec porta orci dapibus','start'=>$year.'-'.$month.'-21','end'=>$year.'-'.$month.'-28','className'=>'blue');
//    $data[] = array('title'=>'Phasellus ac arcu in tortor faucibus pharetra','start'=>$year.'-'.$month.'-21','end'=>$year.'-'.$month.'-25','className'=>'red');
    return view('dashboard');
  }
}
