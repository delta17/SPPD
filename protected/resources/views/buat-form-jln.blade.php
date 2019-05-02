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
      @if (session('status'))
        <div class="alert alert-info">
          <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
          <strong>Sukses!</strong>
          {{ session('status') }}
        </div>
      @endif
      <form id="jvalidate" role="form" class="form-horizontal" action="{{url('/upload-form-jln')}}" method="post"
            novalidate="novalidate">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Buat <strong>Form JLN</strong></h3>
            <ul class="panel-controls">
              <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
            </ul>
          </div>
          <div class="panel-body">
            <div class="form-group">
              <label class="col-md-3 col-xs-12 control-label">Nomor Seksi</label>
              <div class="col-md-6 col-xs-12">
                <input type="text" class="form-control" value="" name="no_seksi"/>
                <span class="help-block">contoh: 003</span>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-3 col-xs-12 control-label">Perihal</label>
              <div class="col-md-6 col-xs-12">
                <div class="input-group">
                  <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                  <input type="text" class="form-control" value="" name="perihal" />
                </div>
              </div>
            </div>
            <br/>

            <div class="form-group">
              <label class="col-md-3 col-xs-12 control-label">Sub Bagian/Seksi</label>
              <div class="col-md-6 col-xs-12">

                <select class="form-control select" name="seksi">
                  <option value="" disabled selected>Silahkan pilih seksi</option>
                  @foreach($seksis as $key => $seksi)
                    @if($key == Auth::user()->seksi_id)
                    <option value="{{$seksi->id}}">[{{$seksi->id}}] {{$seksi->seksi}}</option>
                    @endif
                  @endforeach
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-3 col-xs-12 control-label">Program</label>
              <div class="col-md-6 col-xs-12">
                <select class="form-control select" name="program">
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
                <select class="form-control select" name="kegiatan">
                  <option value="" disabled selected>Silahkan pilih kegiatan</option>
                  @foreach($kegiatans as $kegiatan)
                    <option value="{{$kegiatan->id}}">[{{$kegiatan->kode}}] {{$kegiatan->kegiatan}}</option>
                  @endforeach

                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-3 col-xs-12 control-label">Output</label>
              <div class="col-md-6 col-xs-12">

                <select class="form-control select" name="output">
                  <option value="" disabled selected>Silahkan pilih output</option>
                  @foreach($outputs as $output)
                    <option value="{{$output->id}}">[{{$output->kode}}] {{$output->output}}</option>
                  @endforeach
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-3 col-xs-12 control-label">Akun</label>
              <div class="col-md-6 col-xs-12">
                <select class="form-control select" name="komponen">
                  <option value="" disabled selected>Silahkan pilih komponen</option>
                  @foreach($komponens as $komponen)
                    <option value="{{$komponen->id}}">[{{$komponen->kode}}] {{$komponen->komponen}}</option>
                  @endforeach
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-3 col-xs-12 control-label">Sub Komponen</label>
              <div class="col-md-6 col-xs-12">
                <select class="form-control select" name="subkomponen">
                  <option value="" disabled selected>Silahkan pilih subkomponen</option>
                  @foreach($subkomponens as $subkomponen)
                    <option value="{{$subkomponen->id}}">[{{$subkomponen->kode}}] {{$subkomponen->subkomponen}}</option>
                  @endforeach
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-3 col-xs-12 control-label">Komponen</label>
              <div class="col-md-6 col-xs-12">

                <select class="form-control select" name="akun">
                  <option value="" disabled selected>Silahkan pilih akun</option>
                  @foreach($akuns as $akun)
                    <option value="{{$akun->id}}">[{{$akun->kode}}] {{$akun->akun}}</option>
                  @endforeach
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-3 col-xs-12 control-label">Pembebanan MAK</label>
              <div class="col-md-6 col-xs-12">
                <div class="input-group">
                  <span class="input-group-addon"><span class="fa fa-book"></span></span>
                  <input type="text" class="form-control" value="" name="mak">
                </div>
              </div>
            </div>


            <div class="form-group">
              <label class="col-md-3 col-xs-12 control-label">Jumlah Sisa Anggaran di POK</label>
              <div class="col-md-6 col-xs-12">
                <div class="input-group">
                  <span class="input-group-addon">Rp</span>
                  <input type="text" class="form-control" placeholder="Silahkan masukkan nilai" name="sisa_anggaran">
                </div>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-3 col-xs-12 control-label">Personal/Kolektif</label>
              <div class="col-md-6 col-xs-12">
                <select class="form-control select" name="isPersonal">
                  <option value="" disabled selected>Silahkan pilih</option>
                  <option value="1">Personal</option>
                  <option value="0">Kolektif</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-3 col-xs-12 control-label">Keterangan</label>
              <div class="col-md-6 col-xs-12">
                <textarea class="form-control" rows="5" placeholder="Tambahkan keterangan" name="keterangan"></textarea>
              </div>
            </div>

            <div class="form-group">

              <label class="col-md-3 col-xs-12 control-label">Daftar Peserta yang Berangkat</label><br/>
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
                      <th>Perihal</th>
                      <th>Lama <br/>(hari)</th>
                      <th>Jenis <br/>Kendaraan</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>1</td>
                      <td>
                        <input type="hidden" name="nama[1]" value="Henny Anggraini">
                        Henny Anggraini</td>
                      <td>
                        <input type="hidden" name="nip[1]" value="12345678 123456 1 123">
                        12345678 123456 1 123</td>
                      <td>
                        <input type="hidden" name="tgl_dari[1]" value="2019-02-1">
                        2019-02-1</td>
                      <td>
                        <input type="hidden" name="tgl_sampai[1]" value="2019-02-4">
                        2019-02-4</td>
                      <td>
                        <input type="hidden" name="tujuan[1]" value="10009">
                        Jahitan </td>
                      <td>
                        <input type="hidden" name="uraian_id[1]" value="2">
                        1</td>
                      <td>
                        <input type="hidden" name="lamanya[1]" value="4">
                        4</td>
                      <td>
                        <input type="hidden" name="kendaraan_id[1]" value="2">
                        Angkutan Umum</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>
                        <input type="hidden" name="nama[2]" value="Andi Wahyu Prawoko">
                        Andi Wahyu Prawoko</td>
                      <td>
                        <input type="hidden" name="nip[2]" value="12345678 123456 1 123">
                        12345678 123456 1 123</td>
                      <td>
                        <input type="hidden" name="tgl_dari[2]" value="2019-02-1">
                        2019-02-1</td>
                      <td>
                        <input type="hidden" name="tgl_sampai[2]" value="2019-02-4">
                        2019-02-4</td>
                      <td>
                        <input type="hidden" name="tujuan[2]" value="10009">
                        Jahitan </td>
                      <td>
                        <input type="hidden" name="uraian_id[2]" value="1">
                        1</td>
                      <td>
                        <input type="hidden" name="lamanya[2]" value="4">
                        4</td>
                      <td>
                        <input type="hidden" name="kendaraan_id[2]" value="2">
                        Angkutan Umum</td>
                    </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

            <button class="btn btn-default" data-toggle="modal" data-target="#modal_large">Tambah Pelaksana</button>

            <!-- MODALS -->
            <div class="modal" id="modal_basic" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="defModalHead">Basic Modal</h4>
                  </div>
                  <div class="modal-body">
                    Some content in modal example
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="panel-footer">
            <button class="btn btn-default pull-left">Clear Form</button>
            <button class="btn btn-info pull-right" type="submit" onclick="notif()">Submit</button>
          </div>
        </div>
      {{ csrf_field() }}

      </form>
    </div>
  </div>
@endsection

@section('page-scripts')
  <!-- START THIS PAGE PLUGINS-->
  <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
  <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>

  <script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="js/plugins/validationengine/languages/jquery.validationEngine-en.js"></script>
  <script type="text/javascript" src="js/plugins/validationengine/jquery.validationEngine.js"></script>
  <script type="text/javascript" src="js/plugins/jquery-validation/jquery.validate.js"></script>
  <script type="text/javascript" src="js/plugins/maskedinput/jquery.maskedinput.min.js"></script>
  <!-- END THIS PAGE PLUGINS-->

  <script type="text/javascript">
      function notif() {
          confirm("Apakah Anda yakin?")
      }

      var jvalidate = $("#jvalidate").validate({
          ignore: [],
          rules: {
              no_seksi: {
                  required: true,
                  number: true
              },
              perihal: {
                  required: true
              },
              seksi: {
                  required: true
              },
              program: {
                  required: true
              },
              kegiatan: {
                  required: true
              },
              output: {
                  required: true
              },
              komponen: {
                  required: true
              },
              subkomponen: {
                  required: true
              },
              akun: {
                  required: true
              },
              mak: {
                  required: true
              },
              sisa_anggaran: {
                  required: true,
                  minlength: 0,
                  number:true
              }
          }
      });
  </script>
@endsection