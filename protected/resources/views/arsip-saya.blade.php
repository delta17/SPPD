@extends('default')

@section('breadcrumb')
  Arsip Saya
@endsection

@section('page-title')

@endsection

@section('content')
  <div class="row">
    <div class="col-md-12">

      <!-- START DATATABLE EXPORT -->
      <div class="panel panel-default tab" id="arsip">
        <ul class="nav nav-tabs" role="tablist">
          <li class="active"><a href="#tab-first" role="tab" data-toggle="tab">Surat Tugas Saya</a></li>
          <li><a href="#tab-second" role="tab" data-toggle="tab">SPD Saya</a></li>
          <li><a href="#tab-third" role="tab" data-toggle="tab">Laporan Saya</a></li>

        </ul>
        <div class="panel-heading">
          <h3 class="panel-title">Daftar Arsip Saya</h3>
        </div>
        <div class="panel-body">
          <table id="customers2" class="table datatable">
            <thead>
            <tr>
              <th>Nama</th>
              <th>Perihal</th>
              <th>Tujuan</th>
              <th>Tanggal Mulai</th>
              <th>Tanggal Selesai</th>
              <th>Preview</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>Dhian Rizky Riga P</td>
              <td>Pengawasan HKD</td>
              <td>Pembuang Hulu II</td>
              <td>2019/04/20</td>
              <td>2019/04/24</td>
              <td><a href="preview-formJLN.html">Preview</a></td>
            </tr>
            <tr>
              <td>Afti Zahrotin Nur</td>
              <td>Pengawasan Survei IMK</td>
              <td>Kuala Pembuang I</td>
              <td>2019/04/21</td>
              <td>2019/04/23</td>
              <td><a href="preview-formJLN.html">Preview</a></td>
            </tr>
            <tr>
              <td>Retno Cahyaningsih</td>
              <td>Supervisi Pemetaan</td>
              <td>Tabiku</td>
              <td>2019/04/26</td>
              <td>2019/04/28</td>
              <td><a href="preview-formJLN.html">Preview</a></td>
            </tr>
            <tr>
              <td>Nuur Rokhmat H</td>
              <td>Pengawasan Podes</td>
              <td>Pembuang Hulu I</td>
              <td>2019/04/28</td>
              <td>2019/04/30</td>
              <td><a href="preview-formJLN.html">Preview</a></td>
            </tr>
            <tr>
              <td>Airi Satou</td>
              <td>Accountant</td>
              <td>Tokyo</td>
              <td>2008/12/13</td>
              <td>2008/11/28</td>
              <td><a href="preview-formJLN.html">Preview</a></td>
            </tr>
            <tr>
              <td>Brielle Williamson</td>
              <td>Integration Specialist</td>
              <td>New York</td>
              <td>2008/12/13</td>
              <td>2012/12/02</td>
              <td><a href="preview-formJLN.html">Preview</a></td>
            </tr>
            <tr>
              <td>Herrod Chandler</td>
              <td>Sales Assistant</td>
              <td>San Francisco</td>
              <td>2008/12/13</td>
              <td>2012/08/06</td>
              <td><a href="preview-formJLN.html">Preview</a></td>
            </tr>
            <tr>
              <td>Rhona Davidson</td>
              <td>Integration Specialist</td>
              <td>Tokyo</td>
              <td>2008/12/13</td>
              <td>2010/10/14</td>
              <td><a href="preview-formJLN.html">Preview</a></td>
            </tr>
            <tr>
              <td>Colleen Hurst</td>
              <td>Javascript Developer</td>
              <td>San Francisco</td>
              <td>2008/12/13</td>
              <td>2009/09/15</td>
              <td><a href="preview-formJLN.html">Preview</a></td>
            </tr>
            <tr>
              <td>Sonya Frost</td>
              <td>Software Engineer</td>
              <td>Edinburgh</td>
              <td>2008/12/13</td>
              <td>2008/12/13</td>
              <td><a href="preview-formJLN.html">Preview</a></td>
            </tr>

            </tbody>
          </table>

        </div>
      </div>
      <!-- END DATATABLE EXPORT -->


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