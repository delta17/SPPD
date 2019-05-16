@extends('default')

@section('breadcrumb')
  Arsip Saya
@endsection

@section('page-title')

@endsection

@section('content')
  <div class="row">
    <div class="col-md-12">
      @if (session('status'))
        <div class="alert alert-info">
          <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
          <strong>Sukses!</strong>
          {{ session('status') }}
        </div>
      @endif
      <!-- START DATATABLE EXPORT -->
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Daftar Arsip Saya</h3>
        </div>
        <div class="panel-body">
          <table id="customers2" class="table datatable">
            <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Perihal</th>
              <th>Tujuan</th>
              <th>Tanggal Mulai</th>
              <th>Tanggal Selesai</th>
              <th>Status Dinas</th>
              <th style="width: 170px">Action</th>
            </tr>
            </thead>
            <tbody>
            @if(isset($userjlns))
              @foreach($userjlns as $key => $userjln)
                @if($userjln->action > 0 & $userjln->action < 3)
                  <tr>
                    <td>{{$key+1}}</td>
                    @if(isset($userjln->nama))
                      <td>{{$userjln->nama}}</td>
                    @else
                      <td>{{$userjln->getUser->name}}</td>
                    @endif
                    <td>{{$userjln->getUraianKegiatan->uraian}}</td>
                    @if(isset($userjln->tujuan_dlm))
                      <td>{{$userjln->getTujuanDlm->desa}}</td>
                    @elseif(isset($userjln->tujuan_luar))
                      <td>{{$userjln->getTujuanLuar->tujuan}}</td>
                    @else
                      <td>{{$userjln->getTujuanPerusahaan->perusahaan}}</td>
                    @endif
                    <td>{{Date::parse($userjln->tgl_dari)->format('d/m/Y')}}</td>
                    <td>{{Date::parse($userjln->tgl_sampai)->format('d/m/Y')}}</td>
                    @if($userjln->action == 1)
                      <td>Surat Tugas</td>
                      <td>
                        <div class="btn-group">
                          <a href="{{url('preview-surtug-personal/'.$userjln->id)}}" target="_blank" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="print surat tugas"><i class="fa fa-print"></i></a>
                          <a href="{{url('buat-laporan/'.$userjln->id)}}" class="btn btn-default disabled" data-toggle="tooltip" data-placement="top" title="buat laporan"><i class="fa fa-edit"></i></a>
                          <a href="{{url('preview-laporan/'.$userjln->id)}}" class="btn btn-default disabled" data-toggle="tooltip" data-placement="top" title="preview laporan"><i class="fa fa-file-text-o"></i></a>
                        </div>
                      </td>
                    @else
                      <td>SPD</td>
                      <td>
                        <div class="btn-group">
                          <a href="{{url('preview-spd/'.$userjln->id)}}" target="_blank" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="print spd"><i class="fa fa-print"></i></a>
                          @if(isset($userjln->hasil))
                            <a href="{{url('buat-laporan/'.$userjln->id)}}" class="btn btn-default disabled" data-toggle="tooltip" data-placement="top" title="buat laporan"><i class="fa fa-edit"></i></a>
                            <a href="{{url('preview-laporan/'.$userjln->id)}}" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="preview laporan"><i class="fa fa-file-text-o"></i></a>
                          @else
                            <a href="{{url('buat-laporan/'.$userjln->id)}}" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="buat laporan"><i class="fa fa-edit"></i></a>
                            <a href="{{url('preview-laporan/'.$userjln->id)}}" class="btn btn-default disabled" data-toggle="tooltip" data-placement="top" title="preview laporan"><i class="fa fa-file-text-o"></i></a>
                          @endif
                        </div>
                      </td>
                    @endif
                  </tr>
                @endif
              @endforeach
            @endif
            </tbody>
          </table>

        </div>
      </div>
      <!-- END DATATABLE EXPORT -->


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