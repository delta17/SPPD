<!-- START PAGE SIDEBAR -->
<div class="page-sidebar scroll">
  <!-- START X-NAVIGATION -->
  <ul class="x-navigation">
    <li class="xn-logo">
      <a href="{{url('dashboard')}}">Selamat Datang</a>
      <a href="#" class="x-navigation-control"></a>
    </li>
    <li class="xn-profile">
      <a href="#" class="profile-mini">
        <img src="logo-bps.jpg" alt="Logo BPS"/>
      </a>
      <div class="profile">
        <div class="profile-image">
          <img src="logo-bps.jpg" alt="Logo BPS"/>
        </div>
        <div class="profile-data">
          <div class="profile-data-name">{{Auth::user()->name}}</div>
          @if(Auth::user()->seksi_id==0)
            <div class="profile-data-title">KPA/{{Auth::user()->getSeksi->seksi}} BPS Kab. Seruyan</div>
          @elseif(Auth::user()->seksi_id==7)
            <div class="profile-data-title">{{Auth::user()->getSeksi->seksi}}</div>
          @elseif(Auth::user()->level_id==3)
            <div class="profile-data-title">{{Auth::user()->getLevel->level}} BPS Kab. Seruyan</div>
          @else
            <div class="profile-data-title">Seksi {{Auth::user()->getSeksi->seksi}}</div>
          @endif
        </div>
      </div>
    </li>
    <li class="xn-title">Menu</li>
    <li {{ (Request::is('dashboard') ? 'class=active' : '') }}>
      <a href="{{url('dashboard')}}"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>
    </li>
    {{--<li class="xn-openable @yield('active')">--}}
      <!--
      <a href="#"><span class="fa fa-pencil"></span> <span class="xn-text">Buat Surat</span></a>
      -->
    @if(Auth::user()->level_id<7)
      <li {{ (Request::is('approval-form-jln') ? 'class=active' : '') }}>
        <a href="{{url('approval-form-jln')}}"><span class="fa fa-check-square-o"></span>Approval Form JLN</a></li>
    <li {{ (Request::is('buat-form-jln') ? 'class=active' : '') }}>
      <a href="{{url('buat-form-jln')}}"><span class="fa fa-pencil"></span>Buat Form JLN</a></li>
    @endif
      {{--<ul>--}}
        {{--<li @yield('active-jln')>--}}
          {{--<a href="{{url('buat-form-jln')}}"><span class="fa fa-file-text-o"></span> Buat Form JLN</a></li>--}}
        {{--<li class="xn-openable @yield('active2')">--}}
          {{--<a href="{{url('buat-surtug-personal')}}"><span class="fa fa-floppy-o"></span> Buat Surat Tugas</a>--}}
          {{--<ul>--}}
            {{--<li @yield('active-personal')><a href="{{url('buat-surtug-personal')}}">Personal</a></li>--}}
            {{--<li @yield('active-grup')><a href="{{url('buat-surtug-grup')}}">Grup</a></li>--}}
          {{--</ul>--}}
        {{--</li>--}}
        {{--<li @yield('active-spd')><a href="{{url('buat-spd')}}"><span class="fa fa-list-alt"></span> Buat SPD</a></li>--}}
      {{--</ul>--}}

    </li>
    <li {{ (Request::is('agenda') ? 'class=active' : '') }}>
      <a href="{{url('agenda')}}"><span class="fa fa-table"></span> <span class="xn-text">Agenda Surat Tugas</span></a>
    </li>
    @if(Auth::user()->level_id<7)
    <li {{Request::is('form-jln-saya') ? 'class=active' : ''}}>
      <a href="{{url('form-jln-saya')}}"><span class="fa fa-files-o"></span> <span class="xn-text">Form JLN Saya</span></a>
    </li>
    @endif
    <li {{Request::is('arsip-saya') ? 'class=active' : ''}}>
      <a href="{{url('arsip-saya')}}"><span class="fa fa-file-text-o"></span> <span class="xn-text">Arsip Saya</span></a>
    </li>

  </ul>
  <!-- END X-NAVIGATION -->
</div>
<!-- END PAGE SIDEBAR -->