@extends('default')

@section('breadcrumb')
  Approve Form JLN
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
            <h3 class="panel-title">Approve <strong>Form JLN</strong></h3>
            <ul class="panel-controls">
              <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
            </ul>
          </div>

          <div class="panel-body">
              <div class="form-group">
                  <label class="col-md-3 col-xs-12 control-label">No Form JLN</label>
                  <div class="col-md-6 col-xs-12">
                      <p class="form-control-static">123/62081/4/2019</p>
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-md-3 col-xs-12 control-label">Perihal</label>
                  <div class="col-md-6 col-xs-12">
                      <p class="form-control-static">Pembinaan administrasi tahun 2019 BPS Provinsi ke kabupaten/kota</p>
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-md-3 col-xs-12 control-label">Pembebanan MAK</label>
                  <div class="col-md-6 col-xs-12">
                      <p class="form-control-static">054.01.01.2886.970.053.524111</p>
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-md-3 col-xs-12 control-label">Sisa Anggaran</label>
                  <div class="col-md-6 col-xs-12">
                      <p class="form-control-static">5.000.000</p>
                  </div>
              </div>
          </div>

          <div class="panel-body">
              <div>
                  <strong><center>Identitas Pelaksana</center></strong>
                  <br/>
                  <div class="input-group">
                      <table class="table datatable" id='idTabelLampiran'>
                          <thead>
                          <tr>
                              <th>No</th>
                              <th>Nama</th>
                              <th>Tanggal Mulai</th>
                              <th>Tanggal Selesai</th>
                              <th>Lokasi Tujuan</th>
                              <th>Lama Hari</th>
                              <th>Jenis Kendaraan</th>
                              <th>Uraian Kegiatan</th>
                              <th>Waktu Tempuh (jam)</th>
                          </tr>
                          </thead>
                          <tbody>
                          <tr>
                              <td>1</td>
                              <td>Henny Anggraini</td>
                              <td>01/01/2019</td>
                              <td>01/04/2019</td>
                              <td>Bangkal</td>
                              <td>4</td>
                              <td>Darat</td>
                              <td>Pengawasan Susenas Maret 2019</td>
                              <td>30</td>
                          </tr>
                          <tr>
                              <td>2</td>
                              <td>Hendro Sukendro</td>
                              <td>01/01/2019</td>
                              <td>01/04/2019</td>
                              <td>Tumbang Manjul</td>
                              <td>4</td>
                              <td>Darat</td>
                              <td>Pengawasan Susenas Maret 2019</td>
                              <td>50</td>
                          </tr>
                          <tr>
                              <td>3</td>
                              <td>Adiv Fahrur A</td>
                              <td>01/01/2019</td>
                              <td>01/04/2019</td>
                              <td>Sandul</td>
                              <td>4</td>
                              <td>Dinas</td>
                              <td>Pengawasan Susenas Maret 2019</td>
                              <td>40</td>
                          </tr>
                          </tbody>
                      </table>

                      <div class="form-group" id="idSecKeterangan">
                          <label class="control-label" id="idLabelKet"><strong>Keterangan:</strong></label>
                          <p>Untuk Henny Anggraeni terintegrasi dengan kegiatan lain, yaitu kegiatan HKD yang dilaksanakan di Desa Salunuk. Kegiatan HKD dilaksanakan setelah kegiatan ini selelsai.
                          </p>

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

  <!-- END THIS PAGE PLUGINS-->
@endsection