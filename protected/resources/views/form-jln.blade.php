@extends('default')

@section('breadcrumb')
  Approve Form JLN
@endsection

@section('page-title')

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
          @foreach($myjlns as $myjln)

          <div class="panel-body">
              <div class="form-group">
                  <label class="col-md-4 col-xs-12 control-label">No Form JLN</label>
                  <div class="col-md-7 col-xs-12">
                      <p class="form-control-static">{{$myjln->getFormJLN->no_seksi}}</p>
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-md-4 col-xs-12 control-label">Perihal</label>
                  <div class="col-md-7 col-xs-12">
                      <p class="form-control-static">{{$myjln->getFormJLN->perihal}}</p>
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-md-4 col-xs-12 control-label">Pembebanan MAK</label>
                  <div class="col-md-7 col-xs-12">
                      <p class="form-control-static">{{$myjln->getFormJLN->mak}}</p>
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-md-4 col-xs-12 control-label">Sisa Anggaran</label>
                  <div class="col-md-7 col-xs-12">
                      <p class="form-control-static">{{$myjln->getFormJLN->sisa_anggaran}}</p>
                  </div>
              </div>

              <div class="form-group">
                <label class="col-md-4 col-xs-12 control-label">Keterangan</label>
                <div class="col-md-7 col-xs-12">
                  <p class="form-control-static">{{$myjln->getFormJLN->keterangan}}</p>
                </div>
              </div>
          </div>
          @endforeach

          <div class="panel-body">
              <div>
                  <strong><center>Identitas Pelaksana</center></strong>
                  <br/>
                  <div class="input-group">
                    <div class="col-xs-12">
                      <table class="table table-hover" id='idTabelLampiran'>
                          <thead>
                          <tr>
                              <th>No</th>
                              <th>Nama</th>
                              <th>Tanggal Mulai</th>
                              <th>Tanggal Selesai</th>
                              <th>Tujuan</th>
                              <th>Jenis Kendaraan</th>
                              <th>Uraian Kegiatan</th>
                              <th>Satuan</th>
                              <th>Lamanya (Hari)</th>
                              <th>Waktu Standar (Hari)</th>
                              <th>Persetujuan KPA</th>
                          </tr>
                          </thead>
                          <tbody>
                          @foreach($userjlns as $userjln)
                          <tr>
                              <td>{{$loop->iteration}}</td>
                              <td>{{$userjln->nama}}</td>
                              <td>{{$userjln->tgl_dari}}</td>
                              <td>{{$userjln->tgl_sampai}}</td>
                              <td>{{$userjln->tujuan}}</td>
                              <td>{{$userjln->getKendaraan->jenis}}</td>
                              <td>{{$userjln->getUraianKegiatan->uraian}}</td>
                              <td>{{$userjln->getUraianKegiatan->satuan}}</td>
                              <td>{{$userjln->lamanya}}</td>
                              <td>{{$userjln->wkt_standar_dinas}}</td>
                              <td><select class="form-control select" name="approval">
                                  <option value="" disabled="" selected="">--------</option>
                                  <option value="0">Menunggu Persetujuan</option>
                                  <option value="1">Disetujui ST</option>
                                  <option value="2">Disetujui SPD</option>
                                  <option value="4">Ditolak</option>
                                </select></td>
                          </tr>
                          @endforeach
                          </tbody>
                      </table>
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