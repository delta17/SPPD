@extends('default')

@section('breadcrumb')
  Preview Form JLN
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

      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Preview Form JLN</h3>
        </div>

        <div class="panel-body">
          <div id="source-html" style="margin: 1.5cm">
            <p style="text-align: center;">FORM JLN</p>
            <p style="text-align: center;">FORMULIR PERMINTAAN</p>
            <p style="text-align: center;">BELANJA PERJALANAN DINAS BIASA (DN)</p>
            <p style="text-align: center;">NOMOR : {{$userjlns->getFormJLN->no_seksi}}</p>
            <p>&nbsp;</p>
            <p>Kepada Yang Terhormat :</p>
            <p>Kuasa Pengguna Anggaran</p>
            <p>Badan Pusat Statistik</p>
            <p>Kabupaten Seruyan</p>
            <p>di -</p>
            <p style="padding-left: 30px;">Kuala Pembuang</p>
            <p>&nbsp;</p>
            <p>Bersama ini disampaikan rencana perjalanan dinas dalam rangka pembinaan administrasi tahun 2019 BPS Provinsi ke kabupaten/kota:</p>
            <ol>
              <li>Sub Bagian/Seksi : Tata Usaha</li>
              <li>Program : Dukungan manajemen dan pelaksanaan tugas teknis lainnya BPS Provinsi</li>
              <li>Keluaran (output) : Layanan Perkantoran</li>
              <li>Komponen : 002.E &nbsp;(Penyelenggaraan perkantoran lainnya)</li>
              <li>Pembebanan MAK : 054.01.06.2886.994.002.E.524111</li>
              <li>Jumlah Sisa anggaran di POK : Rp. 5.000.000</li>
            </ol>
            <p>&nbsp;</p>
            <p>Daftar peserta yang berangkat sebagai berikut :</p>
            <table border="1" width="650">
              <tbody>
              <tr style="height: 51px;">
                <td style="text-align: center; height: 51px;" width="38">
                  <p>No.</p>
                </td>
                <td style="text-align: center; height: 51px;" width="134">
                  <p>Nama</p>
                </td>
                <td style="text-align: center; height: 51px;" width="159">
                  <p>NIP</p>
                </td>
                <td style="text-align: center; height: 51px;" width="61">
                  <p>Dari Tanggal</p>
                </td>
                <td style="text-align: center; height: 51px;"  width="60">
                  <p>Sampai Tanggal</p>
                </td>
                <td style="text-align: center; height: 51px;" width="102">
                  <p>Tujuan</p>
                </td>
                <td style="text-align: center; height: 51px;" width="78">
                  <p>Lamanya (hari)</p>
                </td>

              </tr>
              <tr style="height: 21px;">
                <td style="height: 21px; text-align: center;" width="38">1.</td>
                <td style="height: 21px; text-align: center;" width="134">Henny Anggraini</td>
                <td style="height: 21px; text-align: center;" width="159">12345678 123456 1 123</td>
                <td style="height: 21px; text-align: center;" width="61">2019-02-1</td>
                <td style="height: 21px; width: 60px">2019-02-4</td>
                <td style="height: 21px; text-align: center;" width="102">Bangkal</td>
                <td style="height: 21px; text-align: center;" width="78">4</td>
              </tr>
              <tr style="height: 21px;">
                <td style="height: 21px; text-align: center;" width="38">2.</td>
                <td style="height: 21px; text-align: center;" width="134">Hendro Sukendro</td>
                <td style="height: 21px; text-align: center;" width="159">12345678 123456 1 123</td>
                <td style="height: 21px; text-align: center;" width="61">2019-02-1</td>
                <td style="height: 21px; width: 60px">2019-02-6</td>
                <td style="height: 21px; text-align: center;" width="102">Tumbang Manjul</td>
                <td style="height: 21px; text-align: center;" width="78">6</td>
              </tr>
              <tr style="height: 21px;">
                <td style="height: 21px; text-align: center;" width="38">3.</td>
                <td style="height: 21px; text-align: center;" width="134">Adiv Fahrur A</td>
                <td style="height: 21px; text-align: center;" width="159">12345678 123456 1 123</td>
                <td style="height: 21px; text-align: center;" width="61">2019-02-1</td>
                <td style="height: 21px; width: 60px">2019-02-5</td>
                <td style="height: 21px; text-align: center;" width="102">Asam Baru</td>
                <td style="height: 21px; text-align: center;" width="78">5</td>
              </tr>

              </tbody>
            </table>
            <p>&nbsp;</p>
            <p>Keterangan :</p>
            <p>Untuk no.1 menggunakan kendaraan darat</p>
            <p>Untuk no.2 menggunakan kendaraan campuran</p>
            <p>Untuk no.3 menggunakan kendaraan dinas</p>
            <p>&nbsp;</p>
            <table style="height: 213px;" width="644">
              <tbody>
              <tr>
                <td style="width: 320px;">&nbsp;</td>
                <td style="width: 323px; text-align: center;">
                  <p>Kuala Pembuang, 29 Januari 2017</p>
                  <p>Kepala Sub Bagian Tata Usaha</p>
                  <p>BPS Kabupaten Seruyan</p>
                  <p>&nbsp;</p>
                  <p>&nbsp;</p>
                  <p>SUCI NOVIARTI,SST</p>
                  <p>NIP.19871106 201012 2 001</p>
                </td>
              </tr>
              </tbody>
            </table>
            <p>&nbsp;</p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
            <table border="1" width="641">
              <tbody>
              <tr>
                <td width="641">
                  <p>Catatan Kuasa Pengguna Anggaran:</p>
                  <p>&nbsp;</p>
                  <p>&nbsp;</p>
                  <p>&nbsp;</p>
                  <p>&nbsp;</p>
                  <p>&nbsp;</p>
                </td>
              </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

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