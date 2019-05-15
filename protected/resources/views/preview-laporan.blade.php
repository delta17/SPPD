@extends('default')

@section('breadcrumb')
  Preview Laporan
@endsection

@section('active-jln')
  class=active
@endsection

@section('content')
  <div class="row" id="idHalamanPreview">
      <div class="col-md-12">
          <form class="form-horizontal">
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

                            p, li, table{
                                font-size: 11pt;
                            }

                        </style>
                      <div id="source-html" >
                      <h4 style="text-align: center;">LAPORAN
                      <br/>TENTANG<br/>PERJALANAN DINAS<br/></h4>
                        <h5>A. Pendahuluan</h5>
                        <h5>1.	Umum</h5>
                        <table>
                          @foreach($fotos as $foto)
                          <tr>
                            <td><img src="{{asset('storage/dokumentasi/'.$foto->foto)}}" alt=""></td>
                            <td></td>
                          </tr>
                          @endforeach
                        </table>
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