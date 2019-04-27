@extends('default')

@section('breadcrumb')
  Buat Form JLN
@endsection

@section('active')
  active
@endsection

@section('active-jln')
  class=active
@endsection

@section('content')
  <div class="row">
    <div class="col-md-12">

      <form class="form-horizontal">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Buat <strong>Form JLN</strong></h3>
            <ul class="panel-controls">
              <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
            </ul>
          </div>

          <div class="panel-body">
            <p></p>
          </div>

          <div class="panel-body">

            <div class="form-group">
              <label class="col-md-3 col-xs-12 control-label">Nomor Seksi</label>
              <div class="col-md-6 col-xs-12">
                <input type="text" class="form-control" readonly value="003"/>
                <span class="help-block">nomor sesuai database yang telah diinput</span>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-3 col-xs-12 control-label"><strong>Perihal</strong></label>
              <div class="col-md-6 col-xs-12">
                <div class="input-group">
                  <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                  <input type="text" class="form-control" value="Pembinaan administrasi tahun 2019 BPS Provinsi ke kabupaten/kota" />
                </div>
              </div>
            </div>
            <br/>

            <div class="form-group">
              <label class="col-md-3 col-xs-12 control-label">Sub Bagian/Seksi</label>
              <div class="col-md-6 col-xs-12">
                <select class="form-control select">
                  <option value="" disabled selected>Silahkan pilih seksi</option>
                  @foreach($seksis as $key => $seksi)
                    @if($key>0 & $key<7)
                    <option value="{{$seksi->id}}">[{{$seksi->id}}] {{$seksi->seksi}}</option>
                    @endif
                  @endforeach
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-3 col-xs-12 control-label">Program</label>
              <div class="col-md-6 col-xs-12">
                <select class="form-control select">
                  <option value="" disabled selected>Silahkan pilih program</option>
                  @foreach($programs as $program)
                    <option value="{{$program->id}}">[{{$program->kode}}] {{$program->program}}</option>
                  @endforeach
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-3 col-xs-12 control-label">Kegiatan</label>
              <div class="col-md-6 col-xs-12">
                <select class="form-control select">
                  <option value="" disabled selected>Silahkan pilih kegiatan</option>
                  @foreach($kegiatans as $kegiatan)
                    <option value="{{$kegiatan->id}}">[{{$kegiatan->kode}}] {{$kegiatan->kegiatan}}</option>
                  @endforeach
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-3 col-xs-12 control-label">Keluaran (output)</label>
              <div class="col-md-6 col-xs-12">
                <select class="form-control select">
                  <option value="" disabled selected>Silahkan pilih output</option>
                  @foreach($outputs as $output)
                    <option value="{{$output->id}}">[{{$output->kode}}] {{$output->output}}</option>
                  @endforeach
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-3 col-xs-12 control-label">Komponen</label>
              <div class="col-md-6 col-xs-12">
                <select class="form-control select">
                  <option value="" disabled selected>Silahkan pilih komponen</option>
                  @foreach($komponens as $komponen)
                    <option value="{{$komponen->id}}">[{{$komponen->kode}}] {{$komponen->komponen}}</option>
                  @endforeach
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-3 col-xs-12 control-label">Subkomponen</label>
              <div class="col-md-6 col-xs-12">
                <select class="form-control select">
                  <option value="" disabled selected>Silahkan pilih subkomponen</option>
                  @foreach($subkomponens as $subkomponen)
                    <option value="{{$subkomponen->id}}">[{{$subkomponen->kode}}] {{$subkomponen->subkomponen}}</option>
                  @endforeach
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-3 col-xs-12 control-label">Akun</label>
              <div class="col-md-6 col-xs-12">
                <select class="form-control select">
                  <option value="" disabled selected>Silahkan pilih akun</option>
                  @foreach($akuns as $akun)
                    <option value="{{$akun->id}}">[{{$akun->kode}}] {{$akun->akun}}</option>
                  @endforeach
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-3 col-xs-12 control-label"><strong>Pembebanan MAK</strong></label>
              <div class="col-md-6 col-xs-12">
                <div class="input-group">
                  <span class="input-group-addon"><span class="fa fa-book"></span></span>
                  <input type="text" class="form-control" readonly="" value="Readonly value">
                </div>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-3 col-xs-12 control-label"><strong>Jumlah Sisa Anggaran di POK</strong></label>
              <div class="col-md-6 col-xs-12">
                <div class="input-group">
                  <span class="input-group-addon">Rp</span>
                  <input type="text" class="form-control" placeholder="Silahkan masukkan nilai">
                </div>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-3 col-xs-12 control-label"><strong>Daftar Peserta yang Berangkat</strong></label><br/>
              <div class="input-group">
                <div class="col-xs-12">
                  <table class="table datatable" id='idTabelLampiran'>
                    <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>NIP</th>
                      <th>Dari <br/> Tanggal</th>
                      <th>Sampai <br/> Tanggal</th>
                      <th>Tujuan</th>
                      <th>Lama <br/>(hari)</th>
                      <th>Jenis <br/>Kendaraan</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>1</td>
                      <td>Henny Anggraini</td>
                      <td>12345678 123456 1 123</td>
                      <td>2019-02-1</td>
                      <td>2019-02-4</td>
                      <td>Bangkal</td>
                      <td>4</td>
                      <td>Darat</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Hendro Sukendro</td>
                      <td>12345678 123456 1 123</td>
                      <td>2019-02-1</td>
                      <td>2019-02-6</td>
                      <td>Tumbang Manjul</td>
                      <td>6</td>
                      <td>Campuran</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Adiv Fahrur A</td>
                      <td>12345678 123456 1 123</td>
                      <td>2019-02-1</td>
                      <td>2019-02-5</td>
                      <td>Asam Baru</td>
                      <td>5</td>
                      <td>Dinas</td>
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
              <label class="col-md-3 col-xs-12 control-label"><strong>Keterangan</strong></label>
              <div class="col-md-6 col-xs-12">
                <textarea class="form-control" rows="5" placeholder="Tambahkan keterangan"></textarea>
              </div>
            </div>

          </div>
          <div class="panel-footer">
            <button class="btn btn-default">Clear Form</button>
            <button class="btn btn-primary pull-right"><a href="{{url('preview-form-jln')}}">Submit</a></button>

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