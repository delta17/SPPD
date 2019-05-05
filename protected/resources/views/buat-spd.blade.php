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

          <div class="panel-heading">
            <h3 class="panel-title">Buat <strong>Surat Perjalanan Dinas</strong></h3>
            <ul class="panel-controls">
              <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
            </ul>
          </div>

          <div class="panel panel-default tabs">
            <ul class="nav nav-tabs" role="tablist">
              <li class="active"><a href="#tab-first" role="tab" data-toggle="tab">First</a></li>
              <li><a href="#tab-second" role="tab" data-toggle="tab">Second</a></li>
              <li><a href="#tab-third" role="tab" data-toggle="tab">Third</a></li>
              <li><a href="#tab-fourth" role="tab" data-toggle="tab">Fourth</a></li>
            </ul>

            <div class="panel-body tab-content">
              <div class="tab-pane active" id="tab-first">


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

              <div class="tab-pane active" id="tab-second">
                <div class="panel-body">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Nomor Buku Kepala</label>
                        <div class="col-md-6 col-xs-12">
                          <input type="text" class="form-control" readonly value="001"/>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Nomor Form JLN</label>
                        <div class="col-md-6 col-xs-12">
                          <input type="text" class="form-control" readonly value="001"/>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label"><strong>Identitas Pelaksana</strong></label>
                      </div>
                      <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Nama</label>
                        <div class="col-md-6 col-xs-12">
                          <div class="input-group">
                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                            <input type="text" class="form-control" readonly value="Henny Anggraini" />
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">NIP</label>
                        <div class="col-md-6 col-xs-12">
                          <div class="input-group">
                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                            <input type="text" class="form-control" readonly value="99998877 999988 9 999" />
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Jabatan</label>
                        <div class="col-md-6 col-xs-12">
                          <div class="input-group">
                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                            <input type="text" class="form-control" readonly value="KSK Danau Sembuluh" />
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label"><strong>Lokasi Pelaksanaan</strong></label>
                        <div class="col-md-6 col-xs-12">
                          <label class="check col-md-3"><input type="radio" class="iradio" name="iradio" id="radioDalamKota"/> Dalam Kota</label>
                          <label class="check col-md-3"><input type="radio" class="iradio" name="iradio" id="radioLuarKota"/> Luar Kota</label>
                          <label class="check col-md-3"><input type="radio" class="iradio" name="iradio" id="radioPerusahaan"/> Perusahaan</label>
                        </div>
                      </div>


                      <div id="ddDalamKota">
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
                      </div>

                      <div class="form-group" id="ddLuarKota">
                        <label class="col-md-3 col-xs-12 control-label">Tujuan Dinas</label>
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

                      <div class="form-group" id="ddPerusahaan">
                        <label class="col-md-3 col-xs-12 control-label">Perusahaan</label>
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
                      <br/>
                      <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label"><strong>Jumlah Baris Visum</strong></label>
                        <div class="col-md-6 col-xs-12">
                          <div class="input-group">
                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                            <input type="text" class="form-control" value="3" />
                          </div>
                        </div>
                      </div>

              </div>

            </div>
          </div>




        </div>
        <div class="panel-footer">
          <button class="btn btn-default">Clear Form</button>
          <button class="btn btn-primary pull-right"><a href="{{url('preview-spd')}}">Submit</a></button>
        </div>

      </form>

    </div>

@endsection

@section('page-scripts')
  <!-- START THIS PAGE PLUGINS-->
  <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
  <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>

  <script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>
  <!-- END THIS PAGE PLUGINS-->

  <!-- awal -->
    <script>
      $(document).ready(function(){
        $("#ddDalamKota").hide();
        $("#ddLuarKota").hide();
        $("#ddPerusahaan").hide();


        $("#radioDalamKota").click(function(){
          $("#ddDalamKota").show();
          $("#ddLuarKota").hide();
          $("#ddPerusahaan").hide();
        });

        $("#radioLuarKota").click(function(){
          $("#ddDalamKota").hide();
          $("#ddLuarKota").show();
          $("#ddPerusahaan").hide();
        });

        $("#radioPerusahaan").click(function(){
          $("#ddDalamKota").hide();
          $("#ddLuarKota").hide();
          $("#ddPerusahaan").show();
        });
      });
    </script>

@endsection