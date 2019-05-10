@extends('default')

@section('breadcrumb')
  Preview Form JLN
@endsection

@section('active-jln')
  class=active
@endsection

@section('content')
  <div class="row" id="idHalamanPreview">
      <div class="col-md-12">
          <form class="form-horizontal">
              <div class="panel panel-default">
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

                            p, li, table{
                                font-size: 11pt;
                            }

                        </style>
                      <div id="source-html" >
                      <p style="text-align: center;">FORM JLN
                      <br/>FORMULIR PERMINTAAN<br/>BELANJA PERJALANAN DINAS BIASA (DN)<br/>
                      NOMOR : B-003/BPS/62081/01/2019</p>

                      <p>Kepada Yang Terhormat :
                        <br/>Kuasa Pengguna Anggaran
                        <br/>Badan Pusat Statistik
                        <br/>Kabupaten Seruyan
                        <br/>di -</p>
                      <p style="padding-left: 30px;">Kuala Pembuang</p>

                      <p>Bersama ini disampaikan rencana perjalanan dinas dalam rangka pembinaan administrasi tahun 2019 BPS Provinsi ke kabupaten/kota:</p>
                      <ol>
                        <li>Sub Bagian/Seksi : Tata Usaha</li>
                        <li>Program : Dukungan manajemen dan pelaksanaan tugas teknis lainnya BPS Provinsi</li>
                        <li>Keluaran (output) : Layanan Perkantoran</li>
                        <li>Komponen : 002.E &nbsp;(Penyelenggaraan perkantoran lainnya)</li>
                        <li>Pembebanan MAK : 054.01.06.2886.994.002.E.524111</li>
                        <li>Jumlah Sisa anggaran di POK : Rp. 5.000.000</li>
                      </ol>
                      <p>Daftar peserta yang berangkat sebagai berikut :</p>
                      <table border="1" width="650">
                        <tbody>
                        <tr style="height: 51px; text-align: center">
                          <td width="20">
                            <p>No.</p>
                          </td>
                          <td width="134">
                            <p>Nama</p>
                          </td>
                          <td width="159">
                            <p>NIP</p>
                          </td>
                          <td width="61">
                            <p>Dari Tanggal</p>
                          </td>
                          <td  width="60">
                            <p>Sampai Tanggal</p>
                          </td>
                          <td width="102">
                            <p>Tujuan</p>
                          </td>
                          <td width="78">
                            <p>Lamanya (hari)</p>
                          </td>

                        </tr>
                        <tr style="height: 21px;">
                          <td width="38">1.</td>
                          <td width="134">Henny Anggraini</td>
                          <td width="159">12345678 123456 1 123</td>
                          <td width="61">2019-02-1</td>
                          <td style="height: 21px; width: 60px">2019-02-4</td>
                          <td width="102">Bangkal</td>
                          <td width="78">4</td>
                        </tr>
                        <tr style="height: 21px;">
                          <td width="38">2.</td>
                          <td width="134">Hendro Sukendro</td>
                          <td width="159">12345678 123456 1 123</td>
                          <td width="61">2019-02-1</td>
                          <td style="height: 21px; width: 60px">2019-02-6</td>
                          <td width="102">Tumbang Manjul</td>
                          <td width="78">6</td>
                        </tr>
                        <tr style="height: 21px;">
                          <td width="38">3.</td>
                          <td width="134">Adiv Fahrur A</td>
                          <td width="159">12345678 123456 1 123</td>
                          <td width="61">2019-02-1</td>
                          <td style="height: 21px; width: 60px">2019-02-5</td>
                          <td width="102">Asam Baru</td>
                          <td width="78">5</td>
                        </tr>
                        </tbody>
                      </table>
                      <br/>
                      Keterangan :
                      <li>Untuk no.1 menggunakan kendaraan darat</li>
                      <li>Untuk no.2 menggunakan kendaraan campuran</li>
                      <li>Untuk no.3 menggunakan kendaraan dinas</li>

                      <table style="height: 213px;" width="644">
                        <tbody>
                        <tr>
                          <td style="width: 320px;">&nbsp;</td>
                          <td style="width: 323px; text-align: center;">
                            <p>Kuala Pembuang, 29 Januari 2017
                            <br/>Kepala Sub Bagian Tata Usaha
                            <br/>BPS Kabupaten Seruyan
                            <br/>&nbsp;<br/>&nbsp;<br/>&nbsp;
                            <br/>SUCI NOVIARTI,SST
                            <br/>NIP.19871106 201012 2 001
                          </td>
                        </tr>
                        </tbody>
                      </table>
                      <p>&nbsp;</p>
                      <table border="1" width="641">
                        <tbody>
                        <tr>
                          <td width="641">
                            <p>Catatan Kuasa Pengguna Anggaran:</p>
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
          </form>
          <div class="panel-footer">
              <button class="btn btn-primary pull-right"><a class="btn jquery-word-export" href="javascript:void(0)"> Download File </a></button>
          </div>
      </div>
    </div>
@endsection

@section('page-scripts')
  <!-- START THIS PAGE PLUGINS-->
  <script type='text/javascript' src="{{asset('js/plugins/icheck/icheck.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/plugins/datatables/jquery.dataTables.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/plugins/FileSaver.js')}}"></script>
  <!-- END THIS PAGE PLUGINS-->

  <!-- codingan export to word -->
  <script type="text/javascript">
      $(document).ready(function(){
          if (typeof jQuery !== "undefined" && typeof saveAs !== "undefined") {
              (function($) {
                  $.fn.wordExport = function(fileName) {
                      fileName = typeof fileName !== 'undefined' ? fileName : "Form JLN";
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