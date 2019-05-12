@extends('default')

@section('breadcrumb')
  Preview Surat Perjalanan Dinas (SPD)
@endsection

@section('active')
  active
@endsection

@section('active2')
  active
@endsection

@section('active-grup')
  class=active
@endsection

@section('content')
  <div class="row" id="idHalamanPreview">
      <div class="col-md-12">
         <form class="form-horizontal">
             <ul class="nav nav-tabs" role="tablist">
                 <li class="active"><a href="#tab-first" role="tab" data-toggle="tab">Halaman 1 (Surat Tugas)</a></li>
                 <li><a href="#tab-second" role="tab" data-toggle="tab">Halaman 2 (SPD)</a></li>
                 <li><a href="#tab-third" role="tab" data-toggle="tab">Halaman 3 (Visum)</a></li>
             </ul>
             <div class="panel panel-default tabs">
                 <div class="cHalamanSurtug" >
                     <div id="idKonversi" class="panel-body tab-content">
                         <style>
                              .cTengah{
                                  text-align: center;
                              }

                              .cJustify{
                                  text-align: justify;
                              }

                              table{
                                  border-collapse: collapse;
                              }

                              .cHalamanSurtug{
                                  margin: 1.5cm
                              }

                              p{
                                  font-size: 11pt;
                              }

                          </style>
                         <div class="tab-pane active" id="tab-first">
                             <div id="sourcehtml" style="">
                                  <p style="text-align: center;"><img src="{{asset('img/bps/logoBPS.png')}}" width="80" height="60" /></p>
                                  <p style="text-align: center;"><strong>SURAT TUGAS</strong></p>
                                  <p style="text-align: center;">Nomor : {{$userjln->no_surat}}</p>
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
                                              <p>{{$userjln->getUser->name}}</p>
                                              <p>{{$userjln->getUser->nip}}</p>
                                              <p>{{$userjln->getUser->jabatan}}</p>
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
                                              <p>{{$userjln->getUraianKegiatan->uraian}} ke {{$userjln->getTujuanDlm->desa}}</p>
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
                                              <p>{{Date::parse($userjln->tgl_dari)->format('d F Y')}} &ndash; {{Date::parse($userjln->tgl_sampai)->format('d F Y')}}</p>
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
                                              <p>Kuala Pembuang, {{Date::parse($userjln->updated_at)->format('d F Y')}}</p>
                                              <p>Kepala Badan Pusat Statistik Kabupaten Seruyan</p>
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
                                              <p>&nbsp;</p>
                                          </td>
                                      </tr>
                                      </tbody>
                                  </table>
                                  <hr />
                                  <p style="text-align: center; font-size: 10pt">Jalan Moh.Hatta No. 7 Kuala Pembuang 74212</p>
                                  <p style="text-align: center; font-size: 10pt; page-break-after: always">Telp/Fax. (0538) 2022436 email : <a href="mailto:bps6208@bps.go.id">bps6208@bps.go.id</a></p>
                              </div>
                         </div>
                         <div class="tab-pane" id="tab-second">
                             <div id="source-html" style="margin: 0cm">
                                 <table style="page-break-before: always">
                                     <tbody>
                                        <tr>
                                            <td rowspan="3" width="90"><p style="text-align: center;"><img src="{{asset('img/bps/logoBPS.png')}}" width="80" height="60" /></p></td>
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
                                            <td>
                                                  <p><em>KABUPATEN SERUYAN</em></p>
                                              </td>
                                              <td>
                                                  <p>Kode No</p>
                                              </td>
                                              <td >
                                                  <p>:</p>
                                              </td>
                                              <td>
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
                                                  <p>{{$userjln->no_surat}}</p>
                                              </td>
                                          </tr>
                                      </tbody>
                                  </table>
                                  <p>&nbsp;</p>
                                  <p style="text-align: center;">SURAT PERJALANAN DINAS (SPD)</p>
                                  <table border="1">
                                      <tbody>
                                      <tr>
                                          <td width="36">
                                              <p style="text-align: center;">1</p>
                                          </td>
                                          <td colspan="2" width="294">
                                              <p>Pejabat Pembuat Komitmen</p>
                                          </td>
                                          <td colspan="2" width="293">
                                              <p>R. PRIMA DEDDY ISWAHYUDI, S.Si</p>
                                          </td>
                                      </tr>
                                      <tr >
                                          <td rowspan="2" width="36">
                                              <p style="text-align: center;">2</p>
                                          </td>
                                          <td colspan="2" rowspan="2" width="294">
                                              <p>Nama /NIP Pegawai yang melaksanakan perjalanan dinas</p>
                                          </td>
                                          <td colspan="2" width="293">
                                              <p>{{strtoupper($userjln->getUser->name)}}</p>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td colspan="2" width="293">
                                              <p>NIP. {{$userjln->getUser->nip}}</p>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td rowspan="3" width="36">
                                              <p style="text-align: center;">3</p>
                                          </td>
                                          <td colspan="2" width="294">
                                              <p>a. Pangkat dan Golongan</p>
                                          </td>
                                          <td colspan="2" width="293">
                                              <p>{{$userjln->getUser->pangkat}}</p>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td colspan="2" width="294">
                                              <p>b. Jabatan/Instansi</p>
                                          </td>
                                          <td colspan="2" width="293">
                                              <p>{{$userjln->getUser->jabatan}}</p>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td colspan="2" width="294">
                                              <p>c. Tingkat Biaya perjalanan dinas</p>
                                          </td>
                                          <td colspan="2" width="293">
                                              <p>C</p>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td width="36">
                                              <p style="text-align: center;">4</p>
                                          </td>
                                          <td colspan="2" width="294">
                                              <p>Maksud perjalanan dinas</p>
                                          </td>
                                          <td colspan="2" width="293">
                                              <p>{{$userjln->getUraianKegiatan->uraian}} di {{$userjln->getTujuanDlm->desa}}</p>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td width="36">
                                              <p style="text-align: center;">5</p>
                                          </td>
                                          <td colspan="2" width="294">
                                              <p>Alat angkutan yang dipergunakan</p>
                                          </td>
                                          <td colspan="2" width="293">
                                              <p>{{$userjln->getKendaraan->jenis}}</p>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td rowspan="2" width="36">
                                              <p style="text-align: center;">6</p>
                                          </td>
                                          <td colspan="2" width="294">
                                              <p>a. Tempat berangkat</p>
                                          </td>
                                          <td colspan="2" width="293">
                                              <p>Kuala Pembuang</p>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td colspan="2" width="294">
                                              <p>b. Tempat tujuan</p>
                                          </td>
                                          <td colspan="2" width="293">
                                              <p>Desa {{$userjln->getTujuanDlm->desa}}</p>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td rowspan="3" width="36">
                                              <p style="text-align: center;">7</p>

                                          </td>
                                          <td colspan="2" width="294">
                                              <p>a. Lamanya perjalanan dinas</p>
                                          </td>
                                          <td colspan="2" width="293">
                                              <p>{{$userjln->lamanya}} hari</p>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td colspan="2" width="294">
                                              <p>b. Tanggal berangkat</p>
                                          </td>
                                          <td colspan="2" width="293">
                                              <p>{{Date::parse($userjln->tgl_dari)->format('d F Y')}}</p>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td colspan="2" width="294">
                                              <p>c. Tanggal harus kembali/tiba di tempat baru</p>
                                          </td>
                                          <td colspan="2" width="293">
                                              <p>{{Date::parse($userjln->tgl_sampai)->format('d F Y')}}</p>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td rowspan="2" width="36">
                                              <p style="text-align: center;">8</p>
                                          </td>
                                          <td width="125">
                                              <p>Pengikut :</p>
                                          </td>
                                          <td  width="125">
                                              <p>Nama</p>
                                          </td>
                                          <td width="125">
                                              <p>Tanggal Lahir</p>
                                          </td>
                                          <td width="125">
                                              <p>Keterangan</p>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td width="125">
                                              <p>&nbsp;</p>
                                          </td>
                                          <td width="125">
                                              <p>&nbsp;</p>
                                          </td>
                                          <td width="125">
                                              <p>&nbsp;</p>
                                          </td>
                                          <td width="125">
                                              <p>&nbsp;</p>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td rowspan="3" width="36">
                                              <p style="text-align: center;">9</p>
                                          </td>
                                          <td colspan="2" width="294">
                                              <p>Pembebanan Anggaran</p>
                                          </td>
                                          <td colspan="2" width="293">
                                              <p>DIPA BPS Kabupaten Seruyan</p>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td colspan="2" width="294">
                                              <p>a.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Instansi</p>
                                          </td>
                                          <td colspan="2" width="293">
                                              <p>a. BPS Kabupaten Seruyan</p>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td colspan="2" width="294">
                                              <p>b.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Akun</p>
                                          </td>
                                          <td colspan="2" width="293" >
                                              <p>b. {{$userjln->getFormJLN->mak}}</p>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td width="36">
                                              <p style="text-align: center;">10</p>
                                          </td>
                                          <td colspan="2" width="294">
                                              <p>Keterangan Lain - Lain</p>
                                          </td>
                                          <td colspan="2" width="293">
                                              <p>&nbsp;</p>
                                          </td>
                                      </tr>
                                      </tbody>
                                  </table>

                                  <p style="text-align: center;">&nbsp;</p>
                                  <table >
                                      <tbody>
                                      <tr>
                                          <td style="width: 294px;">
                                              <p>&nbsp;</p>
                                          </td>
                                          <td style="width: 293px;">
                                              <p>Dikeluarkan di&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Kuala Pembuang</p>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td style="width: 294px;">
                                              <p>&nbsp;</p>
                                          </td>
                                          <td style="width: 293px;">
                                              <p>Pada Tanggal&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : {{Date::parse($userjln->updated_at)->format('d F Y')}}</p>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td style="width: 330px;">
                                          </td>
                                          <td style="width: 293px;">
                                              <p style="text-align: center;"><br/>Pejabat Pembuat Komitmen<br/><br/><br/><br/>
                                              <u>R. PRIMA DEDDY ISWAHYUDI, S.Si</u><br/>NIP. 19811204 201003 1 001</p>
                                              <br/><br/>
                                          </td>
                                      </tr>
                                      </tbody>
                                  </table>
                              </div>
                          </div>

                          <div class="tab-pane" id="tab-third">
                              <div id="source-html">
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
                                              <p>Berangkat dari: Kuala Pembuang
                                              <br/>(Tempat Kedudukan)
                                                  <br/>Ke&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:
                                              <br/>Pada tanggal &nbsp; &nbsp; &nbsp;:
                                              </p>
                                              <p style="text-align: center;">Kepala Badan Pusat Statistik
                                                  <br/>Kabupaten Seruyan<br/><br/><br/><br/>
                                              <u>Agus Suhendar, S.Stat., M.Si</u>
                                              <br/>NIP. 19630101 198802 1 001</p>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td width="34">
                                              <p style="text-align: center;">II.</p>
                                          </td>
                                          <td width="286">
                                              <p>Tiba di&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:
                                                  <br/>Pada tanggal&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :
                                                  <br/><br/><br/>
                                              </p>
                                          </td>
                                          <td width="303">
                                              <p>Berangkat dari&nbsp;&nbsp; :
                                                  <br/>Ke&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:
                                                  <br/>Pada Tanggal&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :
                                                  <br/><br/><br/>                                                              </p>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td width="34">
                                              <p style="text-align: center;">III.</p>
                                          </td>
                                          <td width="286">
                                              <p>Tiba di&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:
                                                  <br/>Pada tanggal&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :
                                                  <br/><br/><br/>
                                              </p>
                                          </td>
                                          <td width="303">
                                              <p>Berangkat dari&nbsp;&nbsp; :
                                                  <br/>Ke&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:
                                                  <br/>Pada Tanggal&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :
                                                  <br/><br/><br/>
                                              </p>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td width="34">
                                              <p style="text-align: center;">IV.</p>
                                          </td>
                                          <td width="286">
                                              <p>Tiba di&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:
                                                  <br/>Pada tanggal&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :
                                                  <br/><br/><br/>
                                              </p>
                                          </td>
                                          <td width="303">
                                              <p>Berangkat dari&nbsp;&nbsp; :
                                                  <br/>Ke&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:
                                                  <br/>Pada Tanggal&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :
                                                  <br/><br/><br/>
                                              </p>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td width="34">
                                              <p style="text-align: center;">V.</p>
                                          </td>
                                          <td width="286">
                                              <p>Tiba kembali di: Kuala Pembuang<br/>
                                              (Tempat Kedudukan)<br/>
                                                  Pada Tanggal&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</p>
                                              <p class="cTengah">BPS Kabupaten Seruyan<br/>
                                              Pejabat Pembuat Komitmen<br/><br/><br/><br/>

                                              <u>R. PRIMA DEDDY ISWAHYUDI, S.Si</u><br/>
                                              NIP. 19811204 201003 1 001</p>
                                          </td>
                                          <td width="303">
                                              <p class="cJustify">Telah diperiksa dengan keterangan bahwa perjalanan tersebut atas perintahnya dan semata-mata untuk kepentingan jabatan dalam waktu yang sesingkat-singkatnya.</p>
                                              <p class="cTengah" >BPS Kabupaten Seruyan<br>
                                              Pejabat Pembuat Komitmen<br/><br/><br/><br/>

                                              <u>R. PRIMA DEDDY ISWAHYUDI, S.Si</u><br/>
                                              NIP. 19811204 201003 1 001</p>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td width="34">
                                              <p style="text-align: center;">VI.</p>
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
                                              <p style="text-align: center;">VII.</p>
                                          </td>
                                          <td colspan="2" width="589">
                                              <p class="classPJustify">PERHATIAN :<br/>
                                              PPK yang menerbitkan SPD, pegawai yang melakukan perjalanan dinas, para pejabat yang mengesahkan tanggal berangkat/tiba serta bendahara pengeluaran bertanggung jawab berdasarkan peraturan-peraturan keuangan negara apabila negara menderita rugi akibat kesalahan, kelalaian dan kealpaannya</p>
                                          </td>
                                      </tr>
                                      </tbody>
                                  </table>
                              </div>
                          </div>
                     </div>
                 </div>
             </div>
             <div class="panel panel-footer">
                 <button class="btn btn-primary pull-right"><a class="btn jquery-word-export" href="javascript:void(0)"> Download File </a></button>
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
  <script type="text/javascript" src="js/plugins/FileSaver.js"></script>
  <!-- END THIS PAGE PLUGINS-->

  <!-- codingan export to word -->
  <script type="text/javascript">
      $(document).ready(function(){
          if (typeof jQuery !== "undefined" && typeof saveAs !== "undefined") {
              (function($) {
                  $.fn.wordExport = function(fileName) {
                      fileName = typeof fileName !== 'undefined' ? fileName : "Surat Perjalanan Dinas";
                      var static = {
                          mhtml: {
                              top: "Mime-Version: 1.0\nContent-Base: " + location.href + "\nContent-Type: Multipart/related; boundary=\"NEXT.ITEM-BOUNDARY\";type=\"text/html\"\n\n--NEXT.ITEM-BOUNDARY\nContent-Type: text/html; charset=\"utf-8\"\nContent-Location: " + location.href + "\n\n<!DOCTYPE html>\n<html>\n_html_</html>",
                              head: "<head>\n<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">\n<style>\n_styles_\n</style>\n</head>\n",
                              body: "<body>_body_</body>"
                          }
                      };
                      var options = {
                          maxWidth: 624
                      };
                      // Clone selected element before manipulating it
                      var markup = $(this).clone();

                      // Remove hidden elements from the output
                      markup.each(function() {
                          var self = $(this);
                          if (self.is(':hidden'))
                              self.remove();
                      });

                      // Embed all images using Data URLs
                      var images = Array();
                      var img = markup.find('img');
                      for (var i = 0; i < img.length; i++) {
                          // Calculate dimensions of output image
                          var w = Math.min(img[i].width, options.maxWidth);
                          var h = img[i].height * (w / img[i].width);
                          // Create canvas for converting image to data URL
                          var canvas = document.createElement("CANVAS");
                          canvas.width = w;
                          canvas.height = h;
                          // Draw image to canvas
                          var context = canvas.getContext('2d');
                          context.drawImage(img[i], 0, 0, w, h);
                          // Get data URL encoding of image
                          var uri = canvas.toDataURL("image/png");
                          $(img[i]).attr("src", img[i].src);
                          img[i].width = w;
                          img[i].height = h;
                          // Save encoded image to array
                          images[i] = {
                              type: uri.substring(uri.indexOf(":") + 1, uri.indexOf(";")),
                              encoding: uri.substring(uri.indexOf(";") + 1, uri.indexOf(",")),
                              location: $(img[i]).attr("src"),
                              data: uri.substring(uri.indexOf(",") + 1)
                          };
                      }

                      // Prepare bottom of mhtml file with image data
                      var mhtmlBottom = "\n";
                      for (var i = 0; i < images.length; i++) {
                          mhtmlBottom += "--NEXT.ITEM-BOUNDARY\n";
                          mhtmlBottom += "Content-Location: " + images[i].location + "\n";
                          mhtmlBottom += "Content-Type: " + images[i].type + "\n";
                          mhtmlBottom += "Content-Transfer-Encoding: " + images[i].encoding + "\n\n";
                          mhtmlBottom += images[i].data + "\n\n";
                      }
                      mhtmlBottom += "--NEXT.ITEM-BOUNDARY--";

                      //TODO: load css from included stylesheet
                      var styles = "";

                      // Aggregate parts of the file together
                      var fileContent = static.mhtml.top.replace("_html_", static.mhtml.head.replace("_styles_", styles) + static.mhtml.body.replace("_body_", markup.html())) + mhtmlBottom;

                      // Create a Blob with the file contents
                      var blob = new Blob([fileContent], {
                          type: "application/msword;charset=utf-8"
                      });
                      saveAs(blob, fileName + ".doc");
                  };
              })(jQuery);
          } else {
              if (typeof jQuery === "undefined") {
                  console.error("jQuery Word Export: missing dependency (jQuery)");
              }
              if (typeof saveAs === "undefined") {
                  console.error("jQuery Word Export: missing dependency (FileSaver.js)");
              }
          }




          $("a.jquery-word-export").click(function(event) {
              $("#idKonversi").wordExport();
          });

      });
  </script>
@endsection