<!DOCTYPE html>
<html lang="en">
<head>
    @include('head')
</head>

<body>

<!-- START PAGE CONTAINER -->
<div class="page-container page-navigation-top-fixed">
    @include('sidebar')

    <!-- START PAGE CONTENT -->
    <div class="page-content">
        @include('navigation')

        <!-- PAGE TITLE -->
          <div class="page-title">
            @yield('page-title')
          </div>
          <!-- END PAGE TITLE -->

        <!-- START PAGE CONTENT WRAP -->
        <div class="page-content-wrap">
            @yield('content')
        </div>
        <!-- END PAGE CONTENT WRAP -->

    </div>
    <!-- END PAGE CONTENT -->
    @include('footer')
</div>

@yield('remove')
@yield('success')

<!-- MESSAGE BOX-->
<div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
  <div class="mb-container">
    <div class="mb-middle">
      <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
      <div class="mb-content">
        <p>Are you sure you want to log out?</p>
        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
      </div>
      <div class="mb-footer">
        <div class="pull-right">
          <a href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"
             class="btn btn-success btn-lg">Yes</a>
          <button class="btn btn-default btn-lg mb-control-close">No</button>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- END MESSAGE BOX-->

<!-- END PAGE CONTAINER -->

<!-- START PLUGINS -->
<script type="text/javascript" src="{{asset('js/plugins/jquery/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/jquery/jquery-ui.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/bootstrap/bootstrap.min.js')}}"></script>
<!-- END PLUGINS -->
@section('page-scripts')
@show
<!-- START TEMPLATE -->
{{--<script type="text/javascript" src="js/settings.js"></script>--}}
<script type="text/javascript" src="{{asset('js/plugins.js')}}"></script>
<script type="text/javascript" src="{{asset('js/actions.js')}}"></script>
<!-- END TEMPLATE -->

</body>
</html>