@extends('default')

@section('breadcrumb')
  Arsip Saya
@endsection

@section('page-title')

@endsection

@section('content')
  <div class="row">
    <div class="col-md-12">

      <!-- START DATATABLE EXPORT -->
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Daftar Arsip Saya</h3>
        </div>
        <div class="panel-body">
          <table id="customers2" class="table datatable">
            <thead>
            <tr>
              <th>Nama</th>
              <th>Perihal</th>
              <th>Tujuan</th>
              <th>Tanggal Mulai</th>
              <th>Tanggal Selesai</th>
              <th>Status Dinas</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>Dhian Rizky Riga P</td>
              <td>Pengawasan HKD</td>
              <td>Pembuang Hulu II</td>
              <td>2019/04/20</td>
              <td>2019/04/24</td>
              <td>SPD</td>
              <td>
                <div class="btn-group">
                  <a class="btn btn-default" data-toggle="tooltip" data-placement="top" title="print surat tugas"><i class="fa fa-print"></i></a>
                  <a class="btn btn-default" data-toggle="tooltip" data-placement="top" title="buat laporan"><i class="fa fa-edit"></i></a>
                  <a class="btn btn-default" data-toggle="tooltip" data-placement="top" title="preview laporan"><i class="fa fa-file-text-o"></i></a>
                </div>
              </td>
            </tr>
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