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
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
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
                                <select class="form-control select" name="program" id="idPilihProgram">
                                    <option value="" disabled selected >Silahkan pilih program</option>
                                    @if(Auth::user()->seksi_id==1)
                                        @foreach($programs as $program)
                                            <option value="{{$program->id}}">[{{$program->kode}}] {{strtoupper($program->program)}}</option>
                                        @endforeach
                                    @else <option value="{{$programs->id}}">[{{$programs->kode}}] {{strtoupper($programs->program)}}</option>
                                    @endif
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Kegiatan</label>
                            <div class="col-md-6 col-xs-12">
                                <select class="form-control select" name="kegiatan" id="idPilihKegiatan">
                                    <option value="" disabled selected>Silahkan pilih kegiatan</option>
                                    @if(Auth::user()->seksi_id==1)
                                        @foreach($kegiatans as $kegiatan)
                                            <option value="{{$kegiatan->id}}">[{{$kegiatan->kode}}] {{strtoupper($kegiatan->kegiatan)}}</option>
                                        @endforeach
                                    @else <option value="{{$kegiatans->id}}">[{{$kegiatans->kode}}] {{strtoupper($kegiatans->kegiatan)}}</option>
                                    @endif
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Keluaran (Output)</label>
                            <div class="col-md-6 col-xs-12">
                                <select class="form-control select" name="output" id="idPilihOutput">
                                    <option value="" disabled selected >Silahkan pilih output</option>
                                    @foreach($outputs as $output)
                                        <option value="{{$output->kode}}">[{{$output->kode}}] {{$output->output}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Komponen</label>
                            <div class="col-md-6 col-xs-12">
                                <select class="form-control  select" name="komponen" id="idPilihKomponen">
                                    <option value="" disabled selected>Silahkan pilih komponen</option>
                                    @foreach($komponens as $komponen)
                                        <option value="{{$komponen->id}}">[{{$komponen->kode}}] {{$komponen->komponen }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Subkomponen</label>
                            <div class="col-md-6 col-xs-12">
                                <select class="form-control select" name="subkomponen" id="idPilihSubkomponen">
                                    <option value="" disabled selected>Silahkan pilih subkomponen</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Akun</label>
                            <div class="col-md-6 col-xs-12">
                                <select class="form-control select" name="akun" id="idPilihAkun">
                                    <option value="" disabled selected>Silahkan pilih akun</option>
                                    @foreach($akuns as $akun)
                                        <option value="{{$akun->id}}">[{{$akun->kode}}] {{strtoupper($akun->akun)}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Pembebanan MAK</label>
                            <div class="col-md-6 col-xs-12">
                                <p id="idProgramTerpilih" value=""></p>
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
                    {{--            <div class="form-group">--}}
                    {{--              <label class="col-md-3 col-xs-12 control-label">Personal/Kolektif</label>--}}
                    {{--              <div class="col-md-6 col-xs-12">--}}
                    {{--                <select class="form-control select" name="isPersonal">--}}
                    {{--                  <option value="" disabled selected>Silahkan pilih</option>--}}
                    {{--                  <option value="1">Personal</option>--}}
                    {{--                  <option value="0">Kolektif</option>--}}
                    {{--                </select>--}}
                    {{--              </div>--}}
                    {{--            </div>--}}
                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Keterangan</label>
                        <div class="col-md-6 col-xs-12">
                            <textarea class="form-control" rows="5" placeholder="Tambahkan keterangan" name="keterangan"></textarea>
                        </div>
                    </div>

                    <br/><br/><br/>

                    <div class="form-group">
                        <label style="text-align: center" class="col-xs-12">Daftar Peserta yang Berangkat</label><br/><br/>
                        <div class="col-xs-12">
                            <table class="table" id='idTabelDaftarPeserta'>
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Dari <br/> Tanggal</th>
                                    <th>Sampai <br/> Tanggal</th>
                                    <th>Tujuan</th>
                                    {{--                        <th>Kegiatan<br/>seksi</th>--}}
                                    <th>Perihal</th>
                                    <th>Kuantitas</th>
                                    <th>Satuan</th>
                                    <th>Lama <br/>(hari)</th>
                                    <th>Jenis <br/>Kendaraan</th>
                                </tr>
                                </thead>
                            </table>
                        </div>
                    </div>

                    <div class="panel-footer">
                        <a href="#modal_large" type="button" class="btn btn-default" data-toggle="modal" data-target="#modal_large">Tambah Pelaksana</a>
                        <button class="btn btn-info pull-right" type="submit" onclick="notif()">Submit</button>
                    </div>

                </div>
                {{ csrf_field() }}

            </form>
        </div>
    </div>

{{--    <button class="btn btn-default" data-toggle="modal" data-target="#modal_large">Tambah Pelaksana</button>--}}

    <!-- MODALS -->
    <div class="modal fade" id="modal_large" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="largeModalHead">Input Petugas yang Berangkat</h4>
                </div>
                <div class="modal-body" >
                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Nama</label>
                        <div class="col-md-6 col-xs-12">
                            <select class="form-control select" id="idPesertaNama">
                                <option value="" disabled selected>Silahkan pilih nama peserta</option>
                                @foreach($users as $user)
                                    @if($user->id<21)
                                        <option value="{{$user->id}}"> {{$user->name}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <br/>

                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Dari Tanggal</label>
                        <div class="col-md-6 col-xs-12">
                            <input type="date" class="form-control select" id="idPesertaTanggalDari">
                        </div>
                    </div>
                    <br/>

                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Sampai Tanggal</label>
                        <div class="col-md-6 col-xs-12">
                            <input type="date" class="form-control select" id="idPesertaTanggalSampai">
                        </div>
                    </div>
                    <br/>

                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Tujuan</label>
                        <div class="col-md-6 col-xs-12">
                            <input type="text" class="form-control select" id="idPesertaTujuan" placeholder="Silahkan isikan tujuan dinas">
                        </div>
                    </div>
                    <br/>
                    <div class="form-group">
                      <label class="col-md-3 col-xs-12 control-label">Kegiatan Seksi</label>
                      <div class="col-md-6 col-xs-12" >
                          <select class="form-control select" id="idPesertaKegSeksi">
                              <option value="" disabled selected>Silahkan pilih jenis kegiatan seksi</option>
                              @foreach($kegSeksis as $kegSeksi )
                                  @if($kegSeksi->seksi_id == Auth::user()->seksi_id)
                                  <option value="{{$kegSeksi->id}}">{{ucwords(strtolower($kegSeksi->kegiatan_seksi))}}</option>
                                  @endif
                              @endforeach
                          </select>
                      </div>
                  </div>
                    <br/>

                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Perihal</label>
                        <div class="col-md-6 col-xs-12">
                            <select class="form-control select" id="idPesertaPerihal">
                                <option value="" disabled selected>Silahkan pilih Perihal Kegiatan</option>

                            </select>
                        </div>
                    </div>
                    <br/>

                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Kuantitas</label>
                        <div class="col-md-6 col-xs-12">
                            <input type="number" class="form-control select" id="idPesertaKuantitas" placeholder="Silahkan isikan kuantitas pekerjaan">
                        </div>
                    </div>
                    <br/>

                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Satuan</label>
                        <div class="col-md-6 col-xs-12">
                            <select class="form-control select" id="idPesertaSatuan">
                                <option value="" disabled selected>Silahkan pilih Perihal Kegiatan</option>
{{--                                @foreach($kegiatans as $kegiatan)--}}
{{--                                    <option value="{{$kegiatan->id}}">[{{$kegiatan->kode}}] {{$kegiatan->kegiatan}}</option>--}}
{{--                                @endforeach--}}
                            </select>
                        </div>
                    </div>
                    <br/>


                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Lama (Hari)</label>
                        <div class="col-md-6 col-xs-12">
                            <input type="number" class="form-control select" id="idPesertaLama" placeholder="Silahkan isikan jumlah hari yang diperlukan">
                        </div>
                    </div>
                    <br/>

                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Jenis Kendaraan</label>
                        <div class="col-md-6 col-xs-12">
                            <select class="form-control select" id="idPesertaKendaraan">
                                <option value="" disabled selected>Silahkan pilih jenis kendaraan</option>
                                @foreach($kendaraans as $kendaraan)
                                    <option value="{{$kendaraan->id}}">{{$kendaraan->jenis}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" id="idBtnTambahPeserta" data-dismiss="modal">Tambahkan</button>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('page-scripts')
    <!-- START THIS PAGE PLUGINS-->
    <script type='text/javascript' src="{{asset('js/plugins/icheck/icheck.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('js/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/plugins/validationengine/languages/jquery.validationEngine-en.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/plugins/validationengine/jquery.validationEngine.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/plugins/jquery-validation/jquery.validate.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/plugins/maskedinput/jquery.maskedinput.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/vue.js')}}"></script>
    <!-- END THIS PAGE PLUGINS-->

    <script type="text/javascript">
        $(document).ready(function() {
            $("#idBtnTambahPeserta").click(function() {
                var valNo = $('input[id="idPesertaNo"]').val();
                var valNama = $("#idPesertaNama").find(":selected").text();
                var idValNama = $("#idPesertaNama").val();

                var valTanggalDari = $("#idPesertaTanggalDari").val();
                var valTanggalSampai = $("#idPesertaTanggalSampai").val();

                var valTujuan = $("#idPesertaTujuan").val();
                // var valKegSeksi = $('input[id="idPesertaKegSeksi"]').val();

                var valPerihal = $("#idPesertaPerihal").find(":selected").text();
                var idValPerihal = $("#idPesertaPerihal").val();

                var valKuantitas = $("#idPesertaKuantitas").val();

                var valSatuan = $("#idPesertaSatuan").find(":selected").text();
                var idValSatuan = $("#idPesertaSatuan").val();

                var valLama = $("#idPesertaLama").val();

                var valKendaraan = $("#idPesertaKendaraan").find(":selected").text();
                var idValKendaraan = $("#idPesertaKendaraan").val();

                var table = document.getElementById('idTabelDaftarPeserta');
                var rowLength = table.rows.length;

                if(rowLength==1){
                    i=1;
                };

                var newElement = '<tr>' +
                    '<td><input class="cTabelKecil" type="text" value=' + i + ' name="no[' + i + ']" readonly data-toggle="tooltip" data-placement="top" title=' + valNo + ' /></td>' +
                    '<td class="cTabelStandar"><input type="hidden" value='+idValNama+' name="user_id['+i+']" readonly  data-toggle="tooltip" data-placement="top" title='+ valNama+' >'+valNama+'</input></td>' +
                    '<td><input class="cTabelStandar" type="text" value=' + valTanggalDari + ' name="tgl_dari[' + i + ']" readonly  data-toggle="tooltip" data-placement="top" title=' + valTanggalDari + ' /></td>' +
                    '<td><input class="cTabelStandar" type="text" value=' + valTanggalSampai + ' name="tgl_sampai[' + i + ']" readonly  data-toggle="tooltip" data-placement="top" title=' + valTanggalSampai + ' /></td>' +
                    '<td><input class="cTabelStandar" type="text" value=' + valTujuan + ' name="tujuan[' + i + ']" readonly  data-toggle="tooltip" data-placement="top" title=' + valTujuan + ' /></td>' +
                    // '<td><input class="cTabelStandar" type="text" value=' + valKegSeksi + ' name="kegSeksi[' + i + ']" readonly  data-toggle="tooltip" data-placement="top" title=' + valKegSeksi + ' /></td>' +
                    '<td class="cTabelBesar"><input type="hidden" value=' + idValPerihal + ' name="uraian_id[' + i + ']" readonly  data-toggle="tooltip" data-placement="top" title=' + valPerihal + '>'+valPerihal+'</input></td>' +
                    '<td><input class="cTabelStandar" type="number" value=' + valKuantitas + ' name="kuantitas[' + i + ']" readonly  data-toggle="tooltip" data-placement="top" title=' + valKuantitas + ' /></td>' +
                    '<td class="cTabelStandar"><input type="hidden" value=' + idValSatuan + ' name="satuan[' + i + ']" readonly  data-toggle="tooltip" data-placement="top" title=' + valSatuan + '>'+valSatuan+'</input></td>' +
                    '<td><input class="cTabelStandar" type="text" value=' + valLama + ' name="lamanya[' + i + ']" readonly  data-toggle="tooltip" data-placement="top" title=' + valLama + ' /></td>' +
                    '<td class="cTabelStandar"><input type="hidden" value=' + idValKendaraan + ' name="kendaraan_id[' + i + ']" readonly data-toggle="tooltip" data-placement="top" title=' + valKendaraan + '>'+valKendaraan+'</input></td>';


                $("#idTabelDaftarPeserta").append($(newElement));

                i=i+1;
                $('.modal :input').val('');
            });




            $("#idPilihProgram").change(function(){
                $("#idPilihProgram option:selected").each(function () {
                    var $this = $(this);
                    if ($this.length) {
                        var selText = $this.text();
                        document.getElementById("idProgramTerpilih").innerHTML = selText.substring(0,11);
                    }
                });
            });

            $("#idPilihKegiatan").change(function(){
                $("#idPilihKegiatan option:selected").each(function () {
                    var $this = $(this);
                    if ($this.length) {
                        var selText = $this.text();
                        document.getElementById("idProgramTerpilih").innerHTML += selText.substring(0,6);
                    }
                });
            });

            $("#idPilihOutput").change(function(){
                $("#idPilihOutput option:selected").each(function () {
                    var $this = $(this);
                    if ($this.length) {
                        var selText = $this.text();
                        document.getElementById("idProgramTerpilih").innerHTML += selText.substring(0,5);
                    }
                });
            });

            $("#idPilihKomponen").on('change', function (e) {
                    var komponen_id = e.target.value;
                    $.get("/SPPD/json-subKomponen?komponen_id=" + komponen_id, function (data) {
                        $('#idPilihSubkomponen').empty();
                        $('#idPilihSubkomponen').append('<option value="">Silahkan pilih subkomponen</option>');
                        $.each(data, function (index, subKomponenObj) {
                            $('#idPilihSubkomponen').append('<option value="'+subKomponenObj.id+'">['+subKomponenObj.kode+'] '+subKomponenObj.subkomponen+'</option>');
                        })
                    });

                $("#idPilihKomponen option:selected").each(function () {
                    var $this = $(this);
                    if ($this.length) {
                        var selText = $this.text();
                        document.getElementById("idProgramTerpilih").innerHTML += selText.substring(0,5);
                    }
                });
            });

            $("#idPilihSubkomponen").change(function(){
                $("#idPilihSubkomponen option:selected").each(function () {
                    var $this = $(this);
                    if ($this.length) {
                        var selText = $this.text();
                        document.getElementById("idProgramTerpilih").innerHTML += selText.substring(0,3);
                    }
                });
            });

            $("#idPilihAkun").change(function(){
                $("#idPilihAkun option:selected").each(function () {
                    var $this = $(this);
                    if ($this.length) {
                        var selText = $this.text();
                        document.getElementById("idProgramTerpilih").innerHTML += selText.substring(0,8);
                    }
                });
            });


            /*

                      $('#idPesertaNama').on('change', function() {
                          $('#idPesertaNip').val(this.value);
                      });

             */
        });

        function notif() {
            confirm("Apakah Anda yakin?")
        }

        var jvalidate = $("#jvalidate").validate({
            ignore: [],
            rules: {
                no_seksi: {
                    required: true,
                    number: true,
                    length: 3
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

        var app = new Vue({
            el : '#jvalidate',
            data : {
                mak1: '',
                mak2: '',
                mak3: '',
                mak4: '',
                mak5: '',
                mak6: '',
                mak: ''
            }
        });
/*
            jQuery(document).ready(function ()
            {
                jQuery('#idPilihKomponen').on('change',function(){
                    var countryID = jQuery(this).val();
                    if(countryID)
                    {
                        jQuery.ajax({
                            url : 'buat-form-JLN/' +countryID,
                            type : "GET",
                            dataType : "json",
                            success:function(data)
                            {
                                console.log(data);
                                jQuery('#idPilihSubkomponen').empty();
                                jQuery.each(data, function(key,value){
                                    $('#idPilihSubkomponen').append('<option value="'+ key +'">'+ value +'</option>');
                                });
                            }
                        });
                    }
                    else
                    {
                        $('#idPilihSubkomponen').empty();
                    }
                });
            });

*/

        $("#idPesertaKegSeksi").on('change', function (e) {
            var kegiatan_id = e.target.value;
            $.get("/SPPD/json-perihalKeg?kegiatan_id=" + kegiatan_id, function (data) {


                $('#idPesertaPerihal').empty();
                $('#idPesertaPerihal').append('<option value="">Silahkan pilih perihal kegiatan</option>');
                $.each(data, function (index, perihalKegObj) {
                    $('#idPesertaPerihal').append('<option value="'+perihalKegObj.id+'">'+perihalKegObj.uraian+'</option>');
                            $('#idPesertaSatuan').append('<option value="'+perihalKegObj.id+'">'+perihalKegObj.satuan+'</option>');
                });
            });
        });



    </script>

@endsection