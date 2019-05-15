<?php
/*
* Full calendar ajax load events example
* Like Pro admin template
* by Aqvatarius
*/

use App\UserJLN;

$connect = new PDO('pgsql:host=localhost;dbname=SPPD','postgres','12345678');

$query = "SELECT * FROM 'mst_user_jln' GROUP BY 'action'";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

foreach ($result as $row){
  $data[] = array(
    'id'      => $row["id"],
    'title'   => $row["uraian_id"],
    'start'   => $row["tgl_dari"],
    'end'     => $row["tgl_sampai"]
  );
}
    $month  = date('m');
    $year   = date('Y');
//    $query = UserJLN::all()->groupBy('action')->get(2);
//    $count = $query->count();
    //    dd($query[0]->getUser->name." melakukan ".$query[0]->getUraianKegiatan->uraian);
    //    dd($query[0]->tgl_sampai);

//    $data = array();
//    for($i=0; $i<$count; $i++){
//      $title = $query[$i]->getUser->name." melakukan ".$query[$i]->getUraianKegiatan->uraian;
//      $data[] = array('title'=>$title,'start'=>$query[$i]->tgl_dari,'end'=>$query[$i]->tgl_sampai);
//    }
//    $query = "SELECT * ";
//    $data = array();
//    $data[] = array('title'=>'Lorem ipsum dolor sit amet','start'=>$year.'-'.$month.'-02','className'=>'green');
//    $data[] = array('title'=>'Donec eget ligula','start'=>$year.'-'.$month.'-03','className'=>'blue');
//    $data[] = array('title'=>'Curabitur dapibus lectus','start'=>$year.'-'.$month.'-03','className'=>'red');
//    $data[] = array('title'=>'Vivamus non','start'=>$year.'-'.$month.'-03','className'=>'orange');
//    $data[] = array('title'=>'Duis sagittis','start'=>$year.'-'.$month.'-08');
//    $data[] = array('title'=>'Nullam eget mauris','start'=>$year.'-'.$month.'-05','end'=>$year.'-'.$month.'-07','className'=>'red');
//    $data[] = array('title'=>'Proin laoreet justo nec','start'=>$year.'-'.$month.'-16','className'=>'orange');
//    $data[] = array('title'=>'Ut faucibus sapien','start'=>date("Y-m-d"));
//    $data[] = array('title'=>'Donec porta orci dapibus','start'=>$year.'-'.$month.'-21','end'=>$year.'-'.$month.'-28','className'=>'blue');
//    $data[] = array('title'=>'Phasellus ac arcu in tortor faucibus pharetra','start'=>$year.'-'.$month.'-21','end'=>$year.'-'.$month.'-25','className'=>'red');
    
    echo json_encode($data);
?>