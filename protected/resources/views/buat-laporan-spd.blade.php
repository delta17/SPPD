@extends('default')

@section('breadcrumb')
  Buat Laporan
@endsection

@section('content')
  <div class="row">
    <div class="col-md-12">
      <form class="form-horizontal">
        <ul class="nav nav-tabs" role="tablist">
          <li class="active"><a href="#tab-first" role="tab" data-toggle="tab">Laporan</a></li>
          <li><a href="#tab-second" role="tab" data-toggle="tab">Upload Foto</a></li>
        </ul>
        <div class="panel panel-default tabs">
          <div class="panel-body tab-content">
            <div class="tab-pane active" id="tab-first">
                <div class="panel-body">
                  <h4 id="idJudulLaporan">LAPORAN<br/> PERJALANAN DINAS</h4>
                  <div id="idIsiLaporan">
                    <h5>A. Pendahuluan</h5>
                    <h5 class="classSubPoin">1.	Umum</h5>
                    <p class="classIsiLaporan">Dalam rangka pelaksanaan tugas penyelenggaraan kegiatan statistik, maka dipandang perlu melakukan perjalanan dinas pengumpulan data range harga dan konversi komoditas Susenas Maret 2018 di Kelurahan Kuala Pembuang II Kecamatan Seruyan Hilir.
                    </p>

                    <h5 class="classSubPoin">2.	Maksud dan Tujuan</h5>
                    <p class="classIsiLaporan">Melakukan pengumpulan data range harga dan konversi komoditas Susenas Maret 2018 di Kelurahan Kuala Pembuang II Kecamatan Seruyan Hilir pada tanggal 5 – 11 Februari 2018.
                    </p>

                    <h5  class="classSubPoin">3.	Ruang Lingkup</h5>
                    <p  class="classIsiLaporan">Pengumpulan data range harga dan konversi komoditas Susenas Maret 2018 di Kelurahan Kuala Pembuang II Kecamatan Seruyan Hilir pada tanggal 5 – 11 Februari 2018.
                    </p>

                    <h5 class="classSubPoin">4.	Dasar:</h5>
                    <p class="classIsiLaporan">a.	Undang-undang No.16 Tahun 1997 tentang Statistik;<br/>b.	Peraturan Pemerintah No.51 Tahun 1999 tentang Penyelenggaraan Statistik.
                    </p>

                    <h5>B.	Kegiatan yang Dilaksanakan</h5>
                    <p  class="classIsiLaporan">Pengumpulan data range harga dan konversi komoditas Susenas Maret 2018 di Kelurahan Kuala Pembuang II Kecamatan Seruyan Hilir pada tanggal 5 – 11 Februari 2018.
                    </p>

                    <h5>C.	Hasil yang Dicapai</h5>
                    <textarea  class="form-control" rows="5"></textarea>

                    <h5>D.	Kesimpulan</h5>
                    <textarea  class="form-control" rows="5"></textarea>

                    <h5>E.	Penutup</h5>
                    <textarea class="form-control" rows="5"></textarea>
                  </div>
                </div>
            </div>
            <div class="tab-pane" id="tab-second">
              <h5>Upload Foto</h5>
              <div class="block push-up-10">
                <form role="form" action="upload.php" class="dropzone dropzone-mini"></form>
              </div>
            </div>
          </div>
        </div>
        <div class="panel-footer" id="idTombolEksport">
          <!--<button class="btn btn-default">Simpan Surat Tugas</button>-->
          <button class="btn btn-primary pull-right" id="BuatSurtug" onclick="exportHTML()">Submit</button>
        </div>
      </form>
    </div>
  </div>
@endsection

@section('page-scripts')
  <!-- START THIS PAGE PLUGINS-->
  <script type='text/javascript' src="{{asset('js/plugins/icheck/icheck.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/plugins/datatables/jquery.dataTables.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/plugins/dropzone/dropzone.min.js')}}"></script>

  <!-- END THIS PAGE PLUGINS-->
@endsection