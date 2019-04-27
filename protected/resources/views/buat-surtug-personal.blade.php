@extends('default')

@section('breadcrumb')
  Buat Surat Tugas Personal
@endsection

@section('active')
  active
@endsection

@section('active2')
  active
@endsection

@section('active-personal')
  class=active
@endsection

@section('content')
  <div class="row">
    <div class="col-md-12">

      <form class="form-horizontal">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Buat Surat Tugas <strong>PERSONAL</strong></h3>
            <ul class="panel-controls">
              <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
            </ul>
          </div>
          <div class="panel-body">
            <p></p>
          </div>
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
                <button id="buatSurtug" class="btn btn-primary pull-right"><a href="{{url('preview-surtug-personal')}}">Simpan Surat Tugas</a></button>
              </div>
            </div>
          </div>

          <div id="source-html" style="display: none;">
            <p style="text-align: center;"><strong><img src="img/bps/logoBPS.png" width="80" /></strong></p>
            <p style="text-align: center;"><strong>SURAT TUGAS</strong></p>
            <p style="text-align: center;">Nomor : 741/62080/07/2018</p>
            <p>&nbsp;</p>
            <p>Yang bertandatangan di bawah ini :</p>
            <p style="text-align: center;">KEPALA BADAN PUSAT STATISTIK KABUPATEN SERUYAN</p>
            <p>Memberi tugas kepada :</p>
            <p>&nbsp;</p>
            <table width="667">
              <tbody>
              <tr style="height: 89px;">
                <td style="height: 89px;" width="149">
                  <p>Nama</p>
                  <p>NIP</p>
                  <p>Jabatan</p>
                </td>
                <td style="height: 89px;" width="16">
                  <p>:</p>
                  <p>:</p>
                  <p>:</p>
                </td>
                <td style="height: 89px;" width="382">
                  <p><em>terlampir</em></p>
                  <p>-</p>
                  <p>Mitra Statistik</p>
                </td>
                <td style="height: 89px;" width="120">
                  <p>&nbsp;</p>
                </td>
              </tr>
              <tr style="height: 30.8672px;">
                <td style="height: 30.8672px;" width="149">
                  <p>Tujuan Tugas</p>
                </td>
                <td style="height: 30.8672px;" width="16">
                  <p>:</p>
                </td>
                <td style="height: 30.8672px;" colspan="2" width="503">
                  <p>Melakukan pengolahan data entri Survei Pertanian Antar Sensus (Sutas) 2018</p>
                </td>
              </tr>
              <tr style="height: 30px;">
                <td style="height: 30px;" width="149">
                  <p>Waktu Pelaksanaan</p>
                </td>
                <td style="height: 30px;" width="16">
                  <p>:&nbsp;&nbsp;</p>
                </td>
                <td style="height: 30px;" colspan="2" width="503">
                  <p>10 Juli 2018 &ndash; 31 Agustus 2018</p>
                </td>
              </tr>
              </tbody>
            </table>
            <p>&nbsp;</p>
            <table>
              <tbody>
              <tr>
                <td width="313">
                  <p>&nbsp;</p>
                </td>
                <td style="text-align: center;" width="353">
                  <p>Kuala Pembuang, 9 Juli 2018</p>
                  <p>Kepala Badan Pusat Statistik Kabupaten Seruyan</p>
                </td>
              </tr>
              <tr>
                <td width="313">
                  <p>&nbsp;</p>
                </td>
                <td style="text-align: center;" width="353">
                  <p>&nbsp;</p>
                </td>
              </tr>
              <tr>
                <td width="313">
                  <p>&nbsp;</p>
                </td>
                <td style="text-align: center;" width="353">
                  <p>&nbsp;</p>
                  <p>&nbsp;</p>
                  <p><strong>AGUS SUHENDAR</strong></p>
                  <p>&nbsp;</p>
                </td>
              </tr>
              </tbody>
            </table>
            <hr />
            <p style="text-align: center; font-size: 10pt">Jalan Moh.Hatta No. 7 Kuala Pembuang 74212</p>
            <p style="text-align: center; font-size: 10pt">Telp/Fax. (0538) 2022436 email : <a href="mailto:bps6208@bps.go.id">bps6208@bps.go.id</a></p>
          </div>
          <div class="panel-footer" id="idTombolEksport">
            <!--<button class="btn btn-default">Simpan Surat Tugas</button>-->
            <button class="btn btn-primary pull-right" id="BuatSurtug">Export as pdf</button>
            <button class="btn btn-primary pull-right" id="BuatSurtug" onclick="exportHTML()">Export as word</button>
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
  <!-- END THIS PAGE PLUGINS-->
@endsection