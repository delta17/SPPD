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
              <th>No Form JLN</th>
              <th>Perihal</th>
              <th>MAK</th>
              <th>Sisa Anggaran</th>
              <th>Keterangan</th>
              <th>Tanggapan KPA</th>
              <th>Preview</th>
            </tr>
            </thead>
            <tbody>
            @if(isset($formjlns))
              @foreach($formjlns as $formjln)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$formjln->no_seksi}}</td>
                  <td>{{$formjln->perihal}}</td>
                  <td>{{$formjln->mak}}</td>
                  <td>{{$formjln->sisa_anggaran}}</td>
                  @if(isset($formjln->keterangan))
                    <td>{{$formjln->keterangan}}</td>
                  @else
                    <td>-</td>
                  @endif
                  @if($formjln->isApproved==0)
                    <td><span class="label label-default label-form">Belum Ditanggapi</span></td>
                    <td><a href="#" class="btn btn-default disabled" data-toggle="tooltip" data-placement="top" title="print form jln"><i class="fa fa-print"></i></a></td>
                  @else
                    <td><span class="label label-success label-form">Sudah Ditanggapi</span></td>
                    <td><a href="{{url('preview-form-jln/'.$formjln->id)}}" target="_blank" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="preview form jln"><i class="fa fa-print"></i></a></td>
                  @endif
                </tr>
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