@extends('logon.index')
@section('logonco')
@if($errors->any())
<div class="alert alert-danger alert-dismissible">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <h4><i class="icon fa fa-ban"></i> Login Failed</h4>
  You may have entered the wrong username/password!
</div>
@endif
<div class="login-box-body">
  <p class="login-box-msg">Sign in to start your session</p>

  <form action="{{('getlogin')}}" method="post">
    {{ csrf_field() }}
    <div class="form-group has-feedback">
      <input name="username" type="text" class="form-control" placeholder="Username" required>
      <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
    </div>
    <div class="form-group has-feedback">
      <input name="password" type="password" class="form-control" placeholder="Password" required>
      <span class="glyphicon glyphicon-lock form-control-feedback"></span>
    </div>
    <div class="row">
      <div class="col-xs-8">
        <a href="{{url('/registrar')}}" class="text-center">Register a new membership</a>
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
@endsection
