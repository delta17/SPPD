@extends('default')

@section('breadcrumb')
  Buat Laporan
@endsection

@section('content')
  <div class="row" id="idHalamanPreview">
    <div class="col-md-12">
      @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif

      <form role="form" class="form-horizontal" method="post" action="{{route('update', $id)}}" enctype="multipart/form-data">
        {{csrf_field()}}
        {{method_field('PATCH')}}
        <ul class="nav nav-tabs" role="tablist">
          <li class="active"><a href="#tab-first" role="tab" data-toggle="tab">Laporan</a></li>
          <li><a href="#tab-second" role="tab" data-toggle="tab">Upload Foto</a></li>
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
                  <div class="panel-body">
                    <h4 id="idJudulLaporan">LAPORAN<br/> PERJALANAN DINAS</h4>
                    <div id="idIsiLaporan">
                      <h5>A. Pendahuluan</h5>
                      <h5 class="classSubPoin">1.	Umum</h5>
                      <input type="hidden" name="id" value="{{$userjln->id}}">
                      <p class="classIsiLaporan">Dalam rangka pelaksanaan tugas penyelenggaraan kegiatan statistik, maka dipandang perlu melakukan perjalanan dinas dalam rangka {{$userjln->getUraianKegiatan->uraian}} di
                        @if(isset($userjln->tujuan_dlm))
                          @if($userjln->tujuan_dlm==10002 or $userjln->tujuan_dlm==10005 or $userjln->tujuan_dlm==40026)
                          Kelurahan
                          @else
                            Desa
                          @endif
                            {{$userjln->getTujuanDlm->desa}} Kecamatan {{$userjln->getTujuanDlm->getKecamatan->kecamatan}}.
                        @elseif(isset($userjln->tujuan_luar))
                            {{$userjln->getTujuanLuar->tujuan}}
                        @else
                            {{$userjln->getTujuanPerusahaan->perusahaan}}
                        @endif
                      </p>

                      <h5 class="classSubPoin">2.	Maksud dan Tujuan</h5>
                      <p class="classIsiLaporan">Melakukan {{$userjln->getUraianKegiatan->uraian}} di
                        @if(isset($userjln->tujuan_dlm))
                          @if($userjln->tujuan_dlm==10002 or $userjln->tujuan_dlm==10005 or $userjln->tujuan_dlm==40026)
                            Kelurahan
                          @else
                            Desa
                          @endif
                          {{$userjln->getTujuanDlm->desa}} Kecamatan {{$userjln->getTujuanDlm->getKecamatan->kecamatan}}.
                        @elseif(isset($userjln->tujuan_luar))
                          {{$userjln->getTujuanLuar->tujuan}}
                        @else
                          {{$userjln->getTujuanPerusahaan->perusahaan}}
                        @endif
                        pada tanggal
                        @if(Date::parse($userjln->tgl_dari)->format('m')==Date::parse($userjln->tgl_dari)->format('m'))
                          {{Date::parse($userjln->tgl_dari)->format('d')}} – {{Date::parse($userjln->tgl_sampai)->format('d F Y')}}.
                        @else
                          {{Date::parse($userjln->tgl_dari)->format('d F Y')}} – {{Date::parse($userjln->tgl_sampai)->format('d F Y')}}.
                        @endif
                      </p>

                      <h5  class="classSubPoin">3.	Ruang Lingkup</h5>
                      <p  class="classIsiLaporan">
                        {{$userjln->getUraianKegiatan->uraian}} di
                        @if(isset($userjln->tujuan_dlm))
                          @if($userjln->tujuan_dlm==10002 or $userjln->tujuan_dlm==10005 or $userjln->tujuan_dlm==40026)
                            Kelurahan
                          @else
                            Desa
                          @endif
                          {{$userjln->getTujuanDlm->desa}} Kecamatan {{$userjln->getTujuanDlm->getKecamatan->kecamatan}}
                        @elseif(isset($userjln->tujuan_luar))
                          {{$userjln->getTujuanLuar->tujuan}}
                        @else
                          {{$userjln->getTujuanPerusahaan->perusahaan}}
                        @endif
                        pada tanggal
                        @if(Date::parse($userjln->tgl_dari)->format('m')==Date::parse($userjln->tgl_dari)->format('m'))
                          {{Date::parse($userjln->tgl_dari)->format('d')}} – {{Date::parse($userjln->tgl_sampai)->format('d F Y')}}.
                        @else
                          {{Date::parse($userjln->tgl_dari)->format('d F Y')}} – {{Date::parse($userjln->tgl_sampai)->format('d F Y')}}.
                        @endif
                      </p>

                      <h5 class="classSubPoin">4.	Dasar:</h5>
                      <p class="classIsiLaporan">a.	Undang-undang No.16 Tahun 1997 tentang Statistik;<br/>b.	Peraturan Pemerintah No.51 Tahun 1999 tentang Penyelenggaraan Statistik.
                      </p>

                      <h5>B.	Kegiatan yang Dilaksanakan</h5>
                      <p  class="classIsiLaporan">
                        {{$userjln->getUraianKegiatan->uraian}} di
                        @if(isset($userjln->tujuan_dlm))
                          @if($userjln->tujuan_dlm==10002 or $userjln->tujuan_dlm==10005 or $userjln->tujuan_dlm==40026)
                            Kelurahan
                          @else
                            Desa
                          @endif
                          {{$userjln->getTujuanDlm->desa}} Kecamatan {{$userjln->getTujuanDlm->getKecamatan->kecamatan}}
                        @elseif(isset($userjln->tujuan_luar))
                          {{$userjln->getTujuanLuar->tujuan}}
                        @else
                          {{$userjln->getTujuanPerusahaan->perusahaan}}
                        @endif
                        pada tanggal
                        @if(Date::parse($userjln->tgl_dari)->format('m')==Date::parse($userjln->tgl_dari)->format('m'))
                          {{Date::parse($userjln->tgl_dari)->format('d')}} – {{Date::parse($userjln->tgl_sampai)->format('d F Y')}}.
                        @else
                          {{Date::parse($userjln->tgl_dari)->format('d F Y')}} – {{Date::parse($userjln->tgl_sampai)->format('d F Y')}}.
                        @endif
                      </p>

                      <h5>C.	Hasil yang Dicapai</h5>
                      <textarea name="hasil" class="form-control" rows="5"></textarea>

                      <h5>D.	Kesimpulan</h5>
                      <textarea name="kesimpulan"class="form-control" rows="5"></textarea>

                      <h5>E.	Penutup</h5>
                      <textarea name="penutup" class="form-control" rows="5"></textarea>
                    </div>
                  </div>
              </div>
              <div class="tab-pane" id="tab-second">
                <h5>Pilih Foto yang akan Di-upload</h5>
                <div class="col-md-12">
                  <input type="file" name="foto[]" multiple class="file" data-preview-file-type="any"/>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="panel panel-footer">
            <button type="submit" class="btn btn-info pull-right">Save</button>
        </div>
      </form>
    </div>
  </div>
@endsection

@section('page-scripts')
  <!-- START THIS PAGE PLUGINS-->
  <script type='text/javascript' src="{{asset('js/plugins/icheck/icheck.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/plugins/dropzone/dropzone.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/plugins/fileinput/fileinput.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/plugins/filetree/jqueryFileTree.js')}}"></script>

  <!-- END THIS PAGE PLUGINS-->

  <!-- codingan export to word -->
  <script type="text/javascript">

      $(function(){
          $("#file-simple").fileinput({
              showUpload: false,
              showCaption: false,
              browseClass: "btn btn-danger",
              fileType: "any"
          });
          $("#filetree").fileTree({
              root: '/',
              script: 'assets/filetree/jqueryFileTree.php',
              expandSpeed: 100,
              collapseSpeed: 100,
              multiFolder: false
          }, function(file) {
              alert(file);
          }, function(dir){
              setTimeout(function(){
                  page_content_onresize();
              },200);
          });
      });


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
  <input type="file" multiple="multiple" class="dz-hidden-input" style="visibility: hidden; position: absolute; top: 0px; left: 0px; height: 0px; width: 0px;">
@endsection