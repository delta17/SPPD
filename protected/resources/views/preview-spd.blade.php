@extends('default')

@section('breadcrumb')
  Preview Surat Perjalanan Dinas
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

        <div class="panel panel-default tabs">
          <ul class="nav nav-tabs" role="tablist">
            <li class="active"><a href="#tab-first" role="tab" data-toggle="tab">Halaman 1 (Surat Perjalanan Dinas)</a></li>
            <li><a href="#tab-second" role="tab" data-toggle="tab">Halaman 2 (Visum)</a></li>

          </ul>
          <div class="panel-body tab-content">
            <div class="tab-pane active" id="tab-first">
              <div id="sourcehtml" style="margin: 1.5cm">
                <table>
                  <tbody>
                  <tr>
                    <td rowspan="3" width="90"><p style="text-align: center;"><img src="img/bps/logoBPS.png" width="80" /></p></td>
                    <td width="288">
                      <p><em>BADAN PUSAT STATISTIK</em></p>
                    </td>
                    <td width="85">
                      <p>Lembar ke</p>
                    </td>
                    <td width="19">
                      <p>:</p>
                    </td>
                    <td width="142">
                      <p>1 (Satu)</p>
                    </td>
                  </tr>
                  <tr>
                    <td width="288">
                      <p><em>KABUPATEN SERUYAN</em></p>
                    </td>
                    <td width="85">
                      <p>Kode No</p>
                    </td>
                    <td width="19">
                      <p>:</p>
                    </td>
                    <td width="142">
                      <p>&nbsp;</p>
                    </td>
                  </tr>
                  <tr>
                    <td width="288">
                      <p>Jl. Moh. Hatta No.7</p>
                    </td>
                    <td width="85">
                      <p>Nomor</p>
                    </td>
                    <td width="19">
                      <p>:</p>
                    </td>
                    <td width="142">
                      <p>059/62080/01/2019</p>
                    </td>
                  </tr>
                  </tbody>
                </table>
                <p>&nbsp;</p>
                <p style="text-align: center;">SURAT PERJALANAN DINAS (SPD)</p>
                <p>&nbsp;</p>
                <table border="1">
                  <tbody>
                  <tr style="height: 35px;">
                    <td style="height: 35px;" width="36">
                      <p style="text-align: center;">1</p>
                    </td>
                    <td style="height: 35px;" colspan="2" width="338">
                      <p>Pejabat Pembuat Komitmen</p>
                    </td>
                    <td style="height: 35px;" colspan="2" width="249">
                      <p>R. PRIMA DEDDY ISWAHYUDI, S.Si</p>
                    </td>
                  </tr>
                  <tr style="height: 35px;">
                    <td style="height: 70px;" rowspan="2" width="36">
                      <p style="text-align: center;">2</p>
                    </td>
                    <td style="height: 70px;" colspan="2" rowspan="2" width="338">
                      <p>Nama /NIP Pegawai yang melaksanakan perjalanan dinas</p>
                    </td>
                    <td style="height: 35px;" colspan="2" width="249">
                      <p>HENNY ANGGRAINI, S.E.</p>
                    </td>
                  </tr>
                  <tr style="height: 35px;">
                    <td style="height: 35px;" colspan="2" width="249">
                      <p>NIP. 19811224 201003 2 002</p>
                    </td>
                  </tr>
                  <tr style="height: 35px;">
                    <td style="height: 105px;" rowspan="3" width="36">
                      <p style="text-align: center;">3</p>
                    </td>
                    <td style="height: 35px;" colspan="2" width="338">
                      <p>a. Pangkat dan Golongan</p>
                    </td>
                    <td style="height: 35px;" colspan="2" width="249">
                      <p>Penata Muda Tk. I (III/b)</p>
                    </td>
                  </tr>
                  <tr style="height: 35px;">
                    <td style="height: 35px;" colspan="2" width="338">
                      <p>b. Jabatan/Instansi</p>
                    </td>
                    <td style="height: 35px;" colspan="2" width="249">
                      <p>KSK Danau Sembuluh</p>
                    </td>
                  </tr>
                  <tr style="height: 35px;">
                    <td style="height: 35px;" colspan="2" width="338">
                      <p>c. Tingkat Biaya perjalanan dinas</p>
                    </td>
                    <td style="height: 35px;" colspan="2" width="249">
                      <p>C</p>
                    </td>
                  </tr>
                  <tr style="height: 74px;">
                    <td style="height: 74px;" width="36">
                      <p style="text-align: center;">4</p>
                    </td>
                    <td style="height: 74px;" colspan="2" width="338">
                      <p>Maksud perjalanan dinas</p>
                    </td>
                    <td style="height: 74px;" colspan="2" width="249">
                      <p>Melakukan Pencacahan Survei Harga Konsumen Pedesaan (HKD-1, HKD-2.1 dan HKD-2.2) di Kecamatan Seruyan Raya Bulan Januari 2019</p>
                    </td>
                  </tr>
                  <tr style="height: 35px;">
                    <td style="height: 35px;" width="36">
                      <p style="text-align: center;">5</p>
                    </td>
                    <td style="height: 35px;" colspan="2" width="338">
                      <p>Alat angkutan yang dipergunakan</p>
                    </td>
                    <td style="height: 35px;" colspan="2" width="249">
                      <p>Kendaraan Umum</p>
                    </td>
                  </tr>
                  <tr style="height: 35px;">
                    <td style="height: 70px;" rowspan="2" width="36">
                      <p style="text-align: center;">6</p>
                    </td>
                    <td style="height: 35px;" colspan="2" width="338">
                      <p>a. Tempat berangkat</p>
                    </td>
                    <td style="height: 35px;" colspan="2" width="249">
                      <p>Kuala Pembuang</p>
                    </td>
                  </tr>
                  <tr style="height: 35px;">
                    <td style="height: 35px;" colspan="2" width="338">
                      <p>b. Tempat tujuan</p>
                    </td>
                    <td style="height: 35px;" colspan="2" width="249">
                      <p>Desa Bangkal</p>
                    </td>
                  </tr>
                  <tr style="height: 35px;">
                    <td style="height: 105px;" rowspan="3" width="36">
                      <p style="text-align: center;">7</p>
                      <p>&nbsp;</p>
                      <p style="text-align: center;">&nbsp;</p>
                    </td>
                    <td style="height: 35px;" colspan="2" width="338">
                      <p>a. Lamanya perjalanan dinas</p>
                    </td>
                    <td style="height: 35px;" colspan="2" width="249">
                      <p>2 ( Dua ) hari</p>
                    </td>
                  </tr>
                  <tr style="height: 35px;">
                    <td style="height: 35px;" colspan="2" width="338">
                      <p>b. Tanggal berangkat</p>
                    </td>
                    <td style="height: 35px;" colspan="2" width="249">
                      <p>17 Januari 2019</p>
                    </td>
                  </tr>
                  <tr style="height: 35px;">
                    <td style="height: 35px;" colspan="2" width="338">
                      <p>c. Tanggal harus kembali/tiba di tempat baru</p>
                    </td>
                    <td style="height: 35px;" colspan="2" width="249">
                      <p>18 Januari 2019</p>
                    </td>
                  </tr>
                  <tr style="height: 35px;">
                    <td style="height: 70px;" rowspan="2" width="36">
                      <p style="text-align: center;">8</p>
                    </td>
                    <td style="height: 35px;" width="214">
                      <p>Pengikut :</p>
                    </td>
                    <td style="height: 35px; text-align: center;" width="125">
                      <p>Nama</p>
                    </td>
                    <td style="height: 35px; text-align: center;" width="125">
                      <p>Tanggal Lahir</p>
                    </td>
                    <td style="height: 35px; text-align: center;" width="125">
                      <p>Keterangan</p>
                    </td>
                  </tr>
                  <tr style="height: 35px;">
                    <td style="height: 35px;" width="214">
                      <p>&nbsp;</p>
                    </td>
                    <td style="height: 35px;" width="125">
                      <p>&nbsp;</p>
                    </td>
                    <td style="height: 35px;" width="125">
                      <p>&nbsp;</p>
                    </td>
                    <td style="height: 35px;" width="125">
                      <p>&nbsp;</p>
                    </td>
                  </tr>
                  <tr style="height: 35px;">
                    <td style="height: 105px;" rowspan="3" width="36">
                      <p style="text-align: center;">9</p>
                    </td>
                    <td style="height: 35px;" colspan="2" width="338">
                      <p>Pembebanan Anggaran</p>
                    </td>
                    <td style="height: 35px;" colspan="2" width="249">
                      <p>DIPA BPS Kabupaten Seruyan</p>
                    </td>
                  </tr>
                  <tr style="height: 35px;">
                    <td style="height: 35px;" colspan="2" width="338">
                      <p>a.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Instansi</p>
                    </td>
                    <td style="height: 35px;" colspan="2" width="249">
                      <p>a. BPS Kabupaten Seruyan</p>
                    </td>
                  </tr>
                  <tr style="height: 35px;">
                    <td style="height: 35px;" colspan="2" width="338">
                      <p>b.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Akun</p>
                    </td>
                    <td style="height: 35px;" colspan="2" width="249">
                      <p>b. 054.01.06.2895.020.300.524113</p>
                    </td>
                  </tr>
                  <tr style="height: 35px;">
                    <td style="height: 35px;" width="36">
                      <p style="text-align: center;">10</p>
                    </td>
                    <td style="height: 35px;" colspan="2" width="338">
                      <p>Keterangan Lain - Lain</p>
                    </td>
                    <td style="height: 35px;" colspan="2" width="249">
                      <p>&nbsp;</p>
                    </td>
                  </tr>
                  </tbody>
                </table>
                <p style="text-align: center;">&nbsp;</p>
                <table style="width: 664px;">
                  <tbody>
                  <tr>
                    <td style="width: 312px;">
                      <p>&nbsp;</p>
                    </td>
                    <td style="width: 338px;">
                      <p>Dikeluarkan di&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Kuala Pembuang&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                      <p>Pada Tanggal&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 11 Januari 2019&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                      <p style="text-align: center;">Pejabat Pembuat Komitmen</p>
                      <p style="text-align: center;">&nbsp;</p>
                      <p style="text-align: center;">&nbsp;</p>
                      <p style="text-align: center;">&nbsp;</p>
                      <p style="text-align: center;">&nbsp;</p>
                      <p style="text-align: center;"><u>R. PRIMA DEDDY ISWAHYUDI, S.Si</u></p>
                      <p style="text-align: center;">NIP. 19811204 201003 1 001</p>
                    </td>
                  </tr>
                  </tbody>
                </table>
              </div>

            </div>
            <div class="tab-pane" id="tab-second">
              <div id="source-html" style="margin: 1.5cm">
                <p>LAMPIRAN SPD</p>
                <table border="1">
                  <tbody>
                  <tr>
                    <td width="34">
                      <p style="text-align: center;">I.</p>
                    </td>
                    <td width="286">
                      <p>&nbsp;</p>
                    </td>
                    <td width="303">
                      <p>Berangkat dari: Kuala Pembuang</p>
                      <p>(Tempat Kedudukan)</p>
                      <p>Ke&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:</p>
                      <p>Pada tanggal &nbsp; &nbsp; &nbsp;:</p>
                      <p>&nbsp;</p>
                      <p style="text-align: center;">Kepala Badan Pusat Statistik</p>
                      <p style="text-align: center;">Kabupaten Seruyan</p>
                      <p style="text-align: center;">&nbsp;</p>
                      <p style="text-align: center;">&nbsp;</p>
                      <p style="text-align: center;">&nbsp;</p>
                      <p style="text-align: center;"><u>Agus Suhendar, S.Stat., M.Si</u></p>
                      <p style="text-align: center;">NIP. 19630101 198802 1 001</p>
                    </td>
                  </tr>
                  <tr>
                    <td width="34">
                      <p style="text-align: center;">II.</p>
                    </td>
                    <td width="286">
                      <p>Tiba di&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:</p>
                      <p>Pada tanggal&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</p>
                    </td>
                    <td width="303">
                      <p>Berangkat dari&nbsp;&nbsp; :</p>
                      <p>Ke&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:</p>
                      <p>Pada Tanggal&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</p>
                    </td>
                  </tr>
                  <tr>
                    <td width="34">
                      <p style="text-align: center;">III.</p>
                    </td>
                    <td width="286">
                      <p>Tiba di&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:</p>
                      <p>Pada tanggal&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</p>
                    </td>
                    <td width="303">
                      <p>Berangkat dari&nbsp;&nbsp; :</p>
                      <p>Ke&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:</p>
                      <p>Pada Tanggal&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</p>
                    </td>
                  </tr>
                  <tr>
                    <td width="34">
                      <p style="text-align: center;">IV.</p>
                    </td>
                    <td width="286">
                      <p>Tiba kembali di: Kuala Pembuang</p>
                      <p>(Tempat Kedudukan)</p>
                      <p>Pada Tanggal&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</p>
                      <p style="text-align: center;">BPS Kabupaten Seruyan</p>
                      <p style="text-align: center;">Pejabat Pembuat Komitmen</p>
                      <p style="text-align: center;">&nbsp;</p>
                      <p style="text-align: center;">&nbsp;</p>
                      <p style="text-align: center;">&nbsp;</p>
                      <p style="text-align: center;"><u>R. PRIMA DEDDY ISWAHYUDI, S.Si</u></p>
                      <p style="text-align: center;">NIP. 19811204 201003 1 001</p>
                    </td>
                    <td width="303">
                      <p>Telah diperiksa dengan keterangan bahwa perjalanan tersebut atas perintahnya dan semata-mata untuk kepentingan jabatan dalam waktu yang sesingkat-singkatnya</p>
                      <p style="text-align: center;">BPS Kabupaten Seruyan</p>
                      <p style="text-align: center;">Pejabat Pembuat Komitmen</p>
                      <p style="text-align: center;">&nbsp;</p>
                      <p style="text-align: center;">&nbsp;</p>
                      <p style="text-align: center;">&nbsp;</p>
                      <p style="text-align: center;"><u>R. PRIMA DEDDY ISWAHYUDI, S.Si</u></p>
                      <p style="text-align: center;">NIP. 19811204 201003 1 001</p>
                    </td>
                  </tr>
                  <tr>
                    <td width="34">
                      <p style="text-align: center;">V.</p>
                    </td>
                    <td width="286">
                      <p>CATATAN LAIN-LAIN :</p>
                    </td>
                    <td width="303">
                      <p>&nbsp;</p>
                    </td>
                  </tr>
                  <tr>
                    <td width="34">
                      <p style="text-align: center;">VI.</p>
                    </td>
                    <td colspan="2" width="589">
                      <p>PERHATIAN :</p>
                      <p>PPK yang menerbitkan SPD, pegawai yang melakukan perjalanan dinas, para pejabat yang mengesahkan tanggal berangkat/tiba serta bendahara pengeluaran bertanggung jawab berdasarkan peraturan-peraturan keuangan negara apabila negara menderita rugi akibat kesalahan, kelalaian dan kealpaannya</p>
                    </td>
                  </tr>
                  </tbody>
                </table>
              </div>
            </div>

          </div>
          <div class="panel-footer">
            <button class="btn btn-primary pull-right">Save Changes <span class="fa fa-floppy-o fa-right"></span></button>
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