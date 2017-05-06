@extends('admin_template')


@section('content')
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href=""><b>Login</b> SPPD</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body" style="background:#333;color:#fff">
    <p class="login-box-msg">Sign in to start your session</p>

    <form role="form" method="POST" action="{{ url('/login') }}">
     {{ csrf_field() }}
      <div class="form-group has-feedback">
       <input id="username" placeholder="Username" type="text" class="form-control" name="username" value="{{ old('username') }}" required autofocus>
        @if ($errors->has('username'))
        <span class="help-block">
        <strong>{{ $errors->first('username') }}</strong>
        </span>
        @endif
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
       <input id="password" placeholder="Password" type="password" class="form-control" name="password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
         @if ($errors->has('password'))
         <span class="help-block">
         <strong>{{ $errors->first('password') }}</strong>
         </span>
           @endif
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
          
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    
    <!-- /.social-auth-links -->

   
  </div>
  <!-- /.login-box-body -->
</div>

<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src="privasi/public/bower_components/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="privasi/public/bower_components/AdminLTE/bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->


@endsection
