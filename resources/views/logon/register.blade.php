@extends('logon.index')
@section('logonco')
<div class="register-box-body">
  <p class="login-box-msg">Register a new membership</p>
  <form action="{{url('/postreg')}}" method="post">
    {{ csrf_field() }}
    <div class="form-group has-feedback">
      <input name="users" type="text" class="form-control" placeholder="Full name" required>
      <span class="glyphicon glyphicon-user form-control-feedback"></span>
    </div>
    <div class="form-group has-feedback">
      <input name="username" type="text" class="form-control" placeholder="Username" required>
      <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
    </div>
    <div class="form-group has-feedback">
      <input name="password" type="password" class="form-control" placeholder="Password" required>
      <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
    </div>
    <div class="row">
      <div class="col-xs-8">
        <div class="checkbox icheck">
          <label>
            <input type="checkbox" required> I agree to the
            <a href="https://termsfeed.com/terms-conditions/0136837cc243c475f222acd69e641a38">Terms & Conditions</a>
          </label>
        </div>
      </div>
      <!-- /.col -->
      <div class="col-xs-4">
        <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
      </div>
      <!-- /.col -->
    </div>
  </form>
  <a href="{{url('/logon')}}" class="text-center">I already have a membership</a>
</div>
@endsection
