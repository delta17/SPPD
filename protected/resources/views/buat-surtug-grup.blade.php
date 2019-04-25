@extends('default')

@section('breadcrumb')
  Buat Surat Tugas Grup
@endsection

@section('active')
  active
@endsection

@section('active2')
  active
@endsection

@section('active-grup')
  class=active
@endsection

@section('content')
  <div class="row">
    <div class="col-md-12">
      <form class="form-horizontal">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Buat Surat Tugas <strong>GRUP</strong></h3>
            <ul class="panel-controls">
              <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
            </ul>
          </div>

          <div class="panel-body">
            <p></p>
          </div>

          <div class="panel-body">

            <div class="form-group">
              <label class="col-md-3 col-xs-12 control-label">Nomor Buku Kepala</label>
              <div class="col-md-6 col-xs-12">
                <input type="text" class="form-control" readonly value="002"/>
                <span class="help-block">nomor sesuai database yang telah diinput</span>
              </div>
            </div>


            <div class="form-group">
              <label class="col-md-3 col-xs-12 control-label"><strong>Identitas Pelaksana</strong></label><br/>
              <div class="col-md-6 col-xs-12">
                <div class="input-group">
                  <table class="table datatable" id='idTabelLampiran'>
                    <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>NIP</th>
                      <th>Jabatan</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>1</td>
                      <td>Henny Anggraini</td>
                      <td>12345678 123456 1 123</td>
                      <td>KSK Danau Sembuluh</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Hendro Sukendro</td>
                      <td>12345678 123456 1 123</td>
                      <td>KSK Suling Tambun</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Adiv Fahrur A</td>
                      <td>12345678 123456 1 123</td>
                      <td>KSK Batu Ampar</td>
                    </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-3 col-xs-12 control-label"></label>
              <div class="col-md-6 col-xs-12">
                <div class="input-group">
                  <button class="btn btn-primary pull-right">Tambah Pelaksana</button>

                </div>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-3 col-xs-12 control-label"><strong>Lokasi Pelaksanaan</strong></label>
            </div>

            <div class="form-group">
              <label class="col-md-3 col-xs-12 control-label">Kecamatan</label>
              <div class="col-md-6 col-xs-12">
                <select class="form-control select">
                  <option>[010] Seruyan Hilir</option>
                  <option>[011] Seruyan Hilir Timur</option>
                  <option>[020] Danau Sembuluh</option>
                  <option>[021] Seruyan Raya</option>
                  <option>[030] Hanau</option>
                  <option>[031] Danau Seluluk</option>
                  <option>[040] Seruyan Tengah</option>
                  <option>[041] Batu Ampar</option>
                  <option>[050] Seruyan Hulu</option>
                  <option>[051] Suling Tambun</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-3 col-xs-12 control-label">Desa</label>
              <div class="col-md-6 col-xs-12">
                <select class="form-control select">
                  <option>[010] Seruyan Hilir</option>
                  <option>[011] Seruyan Hilir Timur</option>
                  <option>[020] Danau Sembuluh</option>
                  <option>[021] Seruyan Raya</option>
                  <option>[030] Hanau</option>
                  <option>[031] Danau Seluluk</option>
                  <option>[040] Seruyan Tengah</option>
                  <option>[041] Batu Ampar</option>
                  <option>[050] Seruyan Hulu</option>
                  <option>[051] Suling Tambun</option>

                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-3 col-xs-12 control-label"><strong>Waktu Pelaksanaan</strong></label>
            </div>

            <div class="form-group">
              <label class="col-md-3 col-xs-12 control-label">Mulai</label>
              <div class="col-md-6 col-xs-12">
                <div class="input-group">
                  <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                  <input type="text" class="form-control datepicker" value="2014-11-01">
                </div>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-3 col-xs-12 control-label">Selesai</label>
              <div class="col-md-6 col-xs-12">
                <div class="input-group">
                  <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                  <input type="text" class="form-control datepicker" value="2014-11-01">
                </div>
              </div>
            </div>


          </div>
          <div class="panel-footer">
            <button class="btn btn-default">Clear Form</button>
            <button class="btn btn-primary pull-right"><a href="{{url('preview-surtug-grup')}}">Submit</a></button>
          </div>
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