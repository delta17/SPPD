@extends('default')

@section('breadcrumb')
  Approval Form JLN
@endsection

@section('page-title')

@endsection

@section('content')
  <div class="row">
    <div class="col-md-12">

      <form role="form" class="form-horizontal" action="{{route('approval', $id)}}" method="post">
        {{csrf_field()}}
        {{method_field('PATCH')}}
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
                      <input type="hidden" name="formJLN_id" value="{{$myjln->getFormJLN->id}}">
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
                              <th>Tujuan</th>
                              <th>Jenis Kendaraan</th>
                              <th>Uraian Kegiatan</th>
                              <th>Kuantitas</th>
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
                              <td>
                                <input type="hidden" name="id[{{$loop->iteration}}]" value="{{$userjln->id}}">
                                {{$userjln->nama}}</td>
{{--                              <td>{{$userjln->tgl_dari}}</td>--}}
{{--                              <td>{{$userjln->tgl_sampai}}</td>--}}
                            @if(isset($userjln->tujuan_dlm))
                              <td>{{$userjln->getTujuanDlm->desa}}</td>
                            @elseif(isset($userjln->tujuan_luar))
                              <td>{{$userjln->getTujuanLuar->tujuan}}</td>
                            @else
                              <td>{{$userjln->getTujuanPerusahaan->perusahaan}}</td>
                            @endif
                              <td>{{$userjln->getKendaraan->jenis}}</td>
                              <td>{{$userjln->getUraianKegiatan->uraian}}</td>
                              <td>{{$userjln->kuantitas}}</td>
                              <td>{{$userjln->getUraianKegiatan->satuan}}</td>
                              <td>{{$userjln->lamanya}}</td>
                              <td>{{$userjln->wkt_standar_dinas}}</td>
                              <td>
                                <select class="form-control select" name="action[{{$loop->iteration}}]">
                                  <option value="0" disabled selected>Menunggu Persetujuan</option>
                                  <option value="1">Disetujui ST</option>
                                  <option value="2">Disetujui SPD</option>
                                  <option value="3">Ditolak</option>
                                </select>
                              </td>
                          </tr>
                          @endforeach
                          </tbody>
                      </table>
                    </div>
                  </div>
              </div>
          </div>

          <div class="panel-body">
            <div class="form-group">
              <label class="col-md-3 col-xs-12 control-label">Catatan KPA</label>
              <div class="col-md-6 col-xs-12">
                <textarea class="form-control" rows="5" placeholder="Tambahkan catatan jika perlu" name="catatan_kpa"></textarea>
              </div>
            </div>
          </div>
        <div class="panel-footer">
          <button class="btn btn-default">Clear Form</button>
          <button class="btn btn-default" type="submit" style="float: right">Submit</button>
{{--          <a href="{{url('approval')}}" class="btn btn-info" style="float: right">Submit</a>--}}
{{--          <input type="hidden" value="PUT" name="_method">--}}
        </div>
      </div>

      </form>

    </div>
  </div>
@endsection

@section('page-scripts')
  <!-- START THIS PAGE PLUGINS-->
  <script type='text/javascript' src="{{asset('/js/plugins/icheck/icheck.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js')}}"></script>

  <script type="text/javascript" src="{{asset('/js/plugins/datatables/jquery.dataTables.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('/js/plugins/bootstrap/bootstrap.min.js')}}"></script>
  <!-- END THIS PAGE PLUGINS-->
@endsection