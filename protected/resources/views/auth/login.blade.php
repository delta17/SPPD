<!DOCTYPE html>
<html lang="en" class="body-full-height">
<head>
  <!-- META SECTION -->
  <title>BPS Kab. Seruyan</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <link rel="icon" href="smallbps.png" type="image/x-icon" />
  <!-- END META SECTION -->

  <!-- CSS INCLUDE -->
  <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>
  <!-- EOF CSS INCLUDE -->
</head>
<body>

<div class="login-container">

  <div class="login-box animated fadeInDown">
    <div class="login-body">
      <div class="login-title">Selamat datang <strong>di SI PA' UDIN</strong></div>
      <div class="login-subtitle">(Sistem Pengelolaan Surat Tugas dan Surat Perjalanan Dinas)</div>
      <form action="{{url('login')}}" class="form-horizontal" method="POST" role="form" aria-label="{{ __('login')}}">
        {{ csrf_field() }}
        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
          <div class="col-md-12">
            <input type="email" class="form-control" name="email" value="{{old('email')}}" placeholder="Email" autofocus/>
            @if ($errors->has('email'))
              <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
              </span>
            @endif
          </div>
        </div>
        <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
          <div class="col-md-12">
            <input type="password" class="form-control" name="password" placeholder="Password"/>
            @if ($errors->has('password'))
              <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
              </span>
            @endif
          </div>
        </div>
        <div class="form-group">

          <div class="col-md-6">
            <a href="#" class="btn btn-link btn-block">Lupa password?</a>
          </div>
          <div class="col-md-6">
            <button class="btn btn-info btn-block">Masuk</button>
          </div>
        </div>
      </form>
    </div>
    <div class="login-footer">
      <div class="pull-left">
        &copy; BPS Kab. Seruyan
      </div>
      <div class="pull-right">
      </div>
    </div>
  </div>

</div>

</body>
</html>