@extends('default')

@section('breadcrumb')
  Agenda Surat Tugas
@endsection

@section('content')
  <div class="row">
    <div class="col-md-12">

      <!-- START DEFAULT DATATABLE -->
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Agenda Surat Tugas</h3>
          <ul class="panel-controls">
            <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
            <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
            <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
          </ul>
        </div>
        <div class="panel-body">
          <table class="table datatable" id='idTabelDinamis'>
            <thead>
            <tr>
              <th>No</th>
              <th>Seksi</th>
              <th>Perihal</th>
              <th>Tanggal</th>
              <th>Personal/Grup</th>
              <th>Pelaksana</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($agendas as $agenda)
              <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$agenda->getFormJLN->getSeksi->seksi}}</td>
                <td>{{$agenda->perihal}}</td>
                <td>{{$agenda->updated_at->format('d-m-Y')}}</td>
                <td>{{$agenda->personal}}</td>
                <td>{{$agenda->pelaksana}}</td>
                <td>
                  <button class="btn btn-primary">
                @switch($agenda->action)
                  @case(0)
                      <a href="{{url('buat-surtug-personal')}}"/>Buat Surat Tugas
                  @break
                  @case(1)
                      <a href="{{url('buat-surtug-grup')}}"/>Buat Surat Tugas
                  @break
                  @case(2)
                      <a href="{{url('buat-spd')}}"/>Buat SPD dan Surat Tugas
                  @break
                @endswitch
                  </button>
                </td>
              </tr>
            @endforeach

            </tbody>
          </table>
        </div>
      </div>
      <!-- END DEFAULT DATATABLE -->

    </div>
  </div>
@endsection

@section('page-scripts')
  <!-- START THIS PAGE PLUGINS-->
  <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
  <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>

  <script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>
  <!-- END THIS PAGE PLUGINS-->
@endsection