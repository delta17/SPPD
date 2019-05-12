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
              @if($agenda->getFormJLN->isApproved==1)
              <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$agenda->getFormJLN->getSeksi->seksi}}</td>
                <td>{{$agenda->perihal}}</td>
                <td>{{Date::parse($agenda->updated_at)->format('d/m/Y')}}</td>
                <td>{{$agenda->personal}}</td>
                <td>{{$agenda->pelaksana}}</td>
                <td>
                @switch($agenda->action)
                  @case (0)
                      <p>Belum disetujui</p>
                    @break
                  @case (1)
                    <a class="btn btn-info" target="_blank" href="{{url('preview-surtug-personal/'.$loop->iteration)}}">Cetak Surat Tugas</a>
                    @break
                  @case (2)
                    <a class="btn btn-success" target="_blank" href="{{url('preview-spd/'.$loop->iteration)}}">Cetak SPD dan Surat Tugas</a>
                    @break
                  @case (3)
                    <a href="#">Ditolak</a>
                    @break
                  @default
                @endswitch
                </td>
              </tr>
              @endif
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