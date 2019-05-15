@extends('default')

@section('breadcrumb')
  Dashboard
@endsection

@section('content')
  <div class="row">
    <div class="col-md-12">
      <div id="alert_holder"></div>
      <div class="calendar">
        <div id="calendar">
        </div>
      </div>
    </div>
  </div>
@endsection

@section('page-scripts')
  <!-- START THIS PAGE PLUGINS-->
  <script type='text/javascript' src="{{asset('js/plugins/icheck/icheck.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js')}}"></script>

  <script type="text/javascript" src="{{asset('js/plugins/moment.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/plugins/fullcalendar/fullcalendar.min.js')}}"></script>
  <!-- END THIS PAGE PLUGINS-->
  <script>
    $(document).ready(function () {
        var calendar = $('#calendar').fullCalendar({
          header:{
            left:'prev, next today',
              center: 'title',
              right:'month,agendaWeek,agendaDay'
          },
            events:'ajax_fullcalendar.php',
        });
    });
  </script>

@endsection