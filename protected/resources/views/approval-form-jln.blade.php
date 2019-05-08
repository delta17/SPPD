@extends('default')

@section('breadcrumb')
  Approval Form JLN
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
          <h3 class="panel-title">Daftar Form JLN Yang Diajukan</h3>

        </div>
        <div class="panel-body">
          <table id="customers2" class="table datatable">
            <thead>
            <tr>
              <th>No</th>
              <th>Seksi</th>
              <th width="15%">No Form JLN</th>
              <th width="30%">Perihal</th>
              <th>MAK</th>
              <th>Sisa Anggaran</th>
              <th>Tanggapan KPA</th>
              <th>Detail</th>
            </tr>
            </thead>
            <tbody>
            @foreach($myjlns as $myjln)
              @if($myjln->getFormJLN->isApproved==0)
              <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$myjln->getFormJLN->getSeksi->seksi}}</td>
                <td>{{$myjln->getFormJLN->no_seksi}}</td>
                <td>{{$myjln->getFormJLN->perihal}}</td>
                <td>{{$myjln->getFormJLN->mak}}</td>
                <td>{{$myjln->getFormJLN->sisa_anggaran}}</td>
                @if($myjln->getFormJLN->isApproved==0)
                  <td><span class="label label-default label-form">Belum Ditanggapi</span></td>
                @endif
                <td style="text-align: center"><a href="{{url('form-jln/'.$myjln->getFormJLN->id)}}">Detail</a></td>
              </tr>
              @endif
            @endforeach
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