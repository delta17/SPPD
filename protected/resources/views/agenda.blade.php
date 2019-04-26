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
              <th>Perihal</th>
              <th>Tanggal</th>
              <th>Personal/Grup</th>
              <th>Pelaksana</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>1</td>
              <td>Pencacahan Sakernas ke Bangkal</td>
              <td>2019-02-07</td>
              <td>Personal</td>
              <td>Henny Anggraini</td>
              <td><button class="btn btn-primary"><a href="{{url('buat-surtug-personal')}}" />Buat Surat Tugas</button></td>
            </tr>

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