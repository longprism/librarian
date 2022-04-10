@extends('dashadmin.admin')
<!-- general form elements -->
@section('members')
<div class="row">
  <div class="col-md-4">
    <div class="box box-danger">
      <div class="box-header with-border">
        <h3 class="box-title">Register a Member</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form role="form" action="{{url('/member/reg')}}" method="post">
        {{ csrf_field() }}
        <div class="box-body">
          <div class="form-group">
            <label>Nama</label>
            <input name="users" type="text" class="form-control" required placeholder="Nama">
          </div>
          <div class="form-group">
            <label>Username</label>
            <input name="username" type="text" class="form-control" required placeholder="Username">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input name="password" type="password" class="form-control" required placeholder="Password">
          </div>
          <div class="form-group">
            <label>Role Access</label>
            <select name="access" class="form-control">
              <option value="Admin">Admin</option>
              <option value="User">User</option>
            </select>
          </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <button type="submit" class="btn btn-primary">Register</button>
        </div>
      </form>
    </div>
  </div>
  <div class="col-md-8">
    <div class="box box-danger">
      <div class="box-header">
        <h3 class="box-title">Members list</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <table id="example2" class="table table-bordered table-hover">
          <thead>
          <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Username</th>
            <th>Role Id</th>
            <th>Action</th>
          </tr>
          </thead>
          <tbody>
          @foreach($user as $value)
          <tr>
            <td>{{ $value->ids }}</td>
            <td>{{ $value->users }}</td>
            <td>{{ $value->username }}</td>
            <td>{{ $value->access }}</td>
            <td>
              <a href="{{url('/member/die/'.$value->ids)}}">
                <button type="button" class="btn btn-danger btn-flat">
                  <i class="fa fa-trash"></i>
              </button></a>
              <button data-toggle="modal" data-target="#modal-{{ $value->ids }}" type="button" class="btn btn-primary btn-flat">
                <i class="fa fa-edit"></i>
              </button>
              <div class="modal fade" id="modal-{{ $value->ids }}">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title">Edit Member : <b>{{ $value->users }}</b></h4>
                    </div>
                    <div class="modal-body">
                      <form role="form" action="{{url('/member/upt/'.$value->ids)}}" method="post">
                        {{ csrf_field() }}
                        <div class="box-body">
                          <div class="form-group">
                            <label>Nama</label>
                            <input name="users" type="text" class="form-control" value="{{ $value->users }}">
                          </div>
                          <div class="form-group">
                            <label>Username</label>
                            <input name="username" type="text" class="form-control" value="{{ $value->users }}">
                          </div>
                          <div class="form-group">
                            <label>Password</label>
                            <input name="password" type="password" class="form-control" value="{{ $value->users }}">
                          </div>
                          <div class="form-group">
                            <label>Role Access</label>
                            <select name="access" class="form-control">
                              <option value="Admin">Admin</option>
                              <option value="User">User</option>
                            </select>
                          </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                          <button type="submit" class="btn btn-primary">Edit</button>
                        </div>
                      </form>
                    </div>
                  </div>
                  <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
              </div>
            </td>
          </tr>
          @endforeach
        </table>
      </div>
      <!-- /.box-body -->
    </div>
  </div>
</div>
<!-- /.box -->
@endsection
