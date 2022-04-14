@extends('dashadmin.admin')
<!-- general form elements -->
@section('members')
<div class="row">
  <div class="col-md-12">
    <div class="box box-danger">
      <div class="box-header">
        <h3 class="box-title">Borrowing list</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <table id="example2" class="table table-bordered table-hover">
          <thead>
          <tr>
            <th>ID Peminjaman</th>
            <th>Nama Buku</th>
            <th>Username</th>
            <th>Pinjam</th>
            <th>Kembali</th>
          </tr>
          </thead>
          <tbody>
          @foreach($borrow as $value)
          <tr>
            <td>{{ $value->idc }}</td>
            <td>{{ $value->namabk }}</td>
            <td>{{ $value->username }}</td>
            <td>{{ $value->pinjam }}</td>
            <td>{{ $value->kembali }}</td>
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
