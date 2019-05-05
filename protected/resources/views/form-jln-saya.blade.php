@extends('default')

@section('breadcrumb')
  Form JLN Saya
@endsection

@section('page-title')

@endsection

@section('content')
  <div class="row">
    <div class="col-md-12">

      <!-- START DATATABLE EXPORT -->
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Daftar Form JLN Saya</h3>


        </div>
        <div class="panel-body">
          <table id="customers2" class="table datatable">
            <thead>
            <tr>
              <th>No</th>
              <th>Perihal</th>
              <th>MAK</th>
              <th>Sisa Anggaran</th>
              <th>Keterangan</th>
              <th>Tanggapan KPA</th>
              <th>Preview</th>
            </tr>
            </thead>
            <tbody>
            @foreach($myjlns as $myjln)
              @if($myjln->getFormJLN->seksi_id == Auth::user()->seksi_id)
              <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$myjln->getFormJLN->perihal}}</td>
                <td>{{$myjln->getFormJLN->mak}}</td>
                <td>{{$myjln->getFormJLN->sisa_anggaran}}</td>
                @if(isset($myjln->getFormJLN->keterangan))
                  <td>{{$myjln->getFormJLN->keterangan}}</td>
                @else
                  <td>-</td>
                @endif
                @if($myjln->getFormJLN->isApproved==0)
                  <td><span class="label label-default label-form">Belum Ditanggapi</span></td>
                @else
                  <td><span class="label label-success label-form">Sudah Ditanggapi</span></td>
                @endif
                <td><a href="{{url('preview-form-jln')}}">Preview</a></td>
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