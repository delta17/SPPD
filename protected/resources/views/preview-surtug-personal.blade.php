@extends('default')

@section('breadcrumb')
  Preview Surat Tugas Personal
@endsection

@section('content')
  <div class="row" id="idHalamanPreview">
      <div class="col-md-12">
          <form class="form-horizontal">
              <ul class="nav nav-tabs" role="tablist">
                  <li class="active"><a href="#tab-first" role="tab" data-toggle="tab">Halaman 1 (Surat Tugas)</a></li>
                  <li><a href="#tab-second" role="tab" data-toggle="tab">Halaman 2 (Visum)</a></li>
              </ul>
              <div class="panel panel-default tabs">
                  <div class="cHalamanSurtug">
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
                          <div id="sourcehtml">
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
                                          <p>{{$userjln->getUraianKegiatan->uraian}} ke
                                              @if(isset($userjln->tujuan_dlm))
                                                  @if($userjln->tujuan_dlm==10002 or $userjln->tujuan_dlm==10005 or $userjln->tujuan_dlm==40026)
                                                      Kelurahan
                                                  @else
                                                      Desa
                                                  @endif
                                                  {{$userjln->getTujuanDlm->desa}} Kecamatan {{$userjln->getTujuanDlm->getKecamatan->kecamatan}}.
                                              @elseif(isset($userjln->tujuan_luar))
                                                  {{$userjln->getTujuanLuar->tujuan}}.
                                              @else
                                                  {{$userjln->getTujuanPerusahaan->perusahaan}}.
                                              @endif
                                          </p>
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
                          <div id="source-html" >
                              <p>Lampiran Surat</p>
                              <p>Nomor&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : {{$userjln->no_surat}}</p>
                              <p>Tanggal&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: {{Date::parse($userjln->updated_at)->format('d F Y')}}</p>
                              <table style="width: 596px;" border="1">
                                  <tbody>
                                  <tr>
                                      <td style="width: 299px;" colspan="2">
                                          <p style="text-align: center;"></p>
                                      </td>
                                      <td style="width: 296px;">
                                          <p style="text-align: center;">Mengetahui :</p>
                                          <p style="text-align: center;">Kepala Badan Pusat Statistik</p>
                                          <p style="text-align: center;">Kabupaten Seruyan,</p>
                                          <p style="text-align: center;">&nbsp;</p>
                                          <p style="text-align: center;">&nbsp;</p>
                                          <p style="text-align: center;">&nbsp;</p>
                                          <p style="text-align: center;">Agus Suhendar, S.Stat., M.Si</p>
                                          <p style="text-align: center;">NIP. 19630101 198802 1 001</p>
                                      </td>
                                  </tr>
                                  <tr style="height: 150px">
                                      <td style="width: 33px;">
                                          <p>1.</p>
                                      </td>
                                      <td style="width: 266px;">
                                          <p>Tiba di :</p>
                                          <p>Pada tanggal :</p>
                                      </td>
                                      <td style="width: 296px;">
                                          <p><strong>&nbsp;</strong></p>
                                      </td>
                                  </tr>
                                  <tr style="height: 150px">
                                      <td style="width: 33px;">
                                          <p>2.</p>
                                      </td>
                                      <td style="width: 266px;">
                                          <p>Tiba di :</p>
                                          <p>Pada tanggal :</p>
                                      </td>
                                      <td style="width: 296px;">
                                          <p><strong>&nbsp;</strong></p>
                                      </td>
                                  </tr>
                                  <tr style="height: 150px">
                                      <td style="width: 33px;">
                                          <p>3.</p>
                                      </td>
                                      <td style="width: 266px;">
                                          <p>Tiba di :</p>
                                          <p>Pada tanggal :</p>
                                      </td>
                                      <td style="width: 296px;">
                                          <p><strong>&nbsp;</strong></p>
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
                  <a type="button" class="btn btn-info pull-right jquery-word-export" href="javascript:void(0)"> Download File </a>
              </div>
          </form>
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
                      fileName = typeof fileName !== 'undefined' ? fileName : "Surat Tugas";
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