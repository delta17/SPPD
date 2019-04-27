@extends('default')

@section('breadcrumb')
  Buat Surat Perjalanan Dinas
@endsection

@section('active')
  active
@endsection

@section('active-spd')
  class=active
@endsection

@section('content')
  <div class="row">
    <div class="col-md-12">
      <form class="form-horizontal">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Buat <strong>Surat Perjalanan Dinas</strong></h3>
            <ul class="panel-controls">
              <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
            </ul>
          </div>

          <div class="panel-body">
            <p></p>
          </div>

          <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label">Nomor Form JLN</label>
            <div class="col-md-6 col-xs-12">
              <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                <input type="text" class="form-control" value="Masukkan nomor form JLN yang telah disetujui" />
              </div>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label"><strong>Nama Pegawai yang melaksanakan perjalanan dinas</strong></label>
            <div class="col-md-6 col-xs-12">
              <input type="text" class="form-control" readonly value="Henny Anggraini"/>
            </div>
          </div>
          <br/>

          <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label"><strong>Maksud Perjalanan Dinas</strong></label>
            <div class="col-md-6 col-xs-12">
              <input type="text" class="form-control" readonly value="Henny Anggraini"/>
            </div>
          </div>
          <br/>

          <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label"><strong>Waktu Pelaksanaan</strong></label>
          </div>

          <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label">Tanggal Mulai Perjalanan Dinas</label>
            <div class="col-md-6 col-xs-12">
              <input type="text" class="form-control" readonly value="Henny Anggraini"/>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label">Tanggal Selesai Perjalanan Dinas</label>
            <div class="col-md-6 col-xs-12">
              <input type="text" class="form-control" readonly value="Henny Anggraini"/>
            </div>
          </div>
          <br/>

          <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label"><strong>Tempat Pelaksanaan</strong></label>
          </div>

          <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label">Tempat Tujuan</label>
            <div class="col-md-6 col-xs-12">
              <input type="text" class="form-control" readonly value="Henny Anggraini"/>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label">Tempat Asal</label>
            <div class="col-md-6 col-xs-12">
              <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                <input type="text" class="form-control" value="Kuala Pembuang" />
              </div>
            </div>
          </div>
          <br/>



          <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label"><strong>Alat angkutan yang digunakan</strong></label>
            <div class="col-md-6 col-xs-12">
              <select class="form-control select">
                <option>Kendaraan Umum</option>
                <option>Kendaraan Dinas</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label">Jumlah Baris Visum</label>
            <div class="col-md-6 col-xs-12">
              <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                <input type="text" class="form-control" value="2" />
              </div>
            </div>
          </div>
          <br/>



        </div>
        <div class="panel-footer">
          <button class="btn btn-default">Clear Form</button>
          <button class="btn btn-primary pull-right"><a href="{{url('preview-spd')}}">Submit</a></button>
        </div>

      </form>

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