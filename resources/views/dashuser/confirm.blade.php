@extends('dashuser.home')
@section('userco')
<div class="row">
  <div class="col-md-8">
    <div class="box box-success">
      <div class="box-header with-border">
        <h3 class="box-title">Confirmation</h3>
      </div>
      <!-- box-body -->
      <div class="box-body">
        @if(($borrow->count()) > 0)
        <form role="form" method="post" action="{{ url('/toinvoice/1') }}">
          {{ csrf_field() }}
          <table class="table table-bordered table-hover printable">
            <thead>
            <tr>
              <th width="9.5%">ID User</th>
              <th width="9.5%">ID Buku</th>
              <th width="20%">Nama Buku</th>
              <th width="15%">Pinjam</th>
              <th width="15%">Kembali</th>
              <th width="5%"></th>
            </tr>
            @foreach($borrow as $confirm_item)
            <tr>
              <td>{{ $confirm_item->ids }}</td>
              <td>{{ $confirm_item->idb }}</td>
              <td>{{ $confirm_item->namabk }}</td>
              <td>{{ $confirm_item->pinjam }}</td>
              <td>{{ $confirm_item->kembali }}</td>
              <td>
                <a class="input-group-btn" href="{{ url('confirm/die/'.$confirm_item->idc) }}">
                  <button type="button" class="btn btn-danger btn-flat">
                    <span class="fa fa-trash"></span>
                  </button>
                </a>
              </td>
            </tr>
            @endforeach
            </thead>
            <tbody>
          </table>
          <button onclick="window.print();" class="btn btn-success btn-flat pull-left">
            <span>Confirm & Print</span>
          </button>
          <a href="{{ url('/confirm/diefull/1') }}">
            <button style="margin-left:10px;" type="button" class="btn btn-danger btn-flat pull-left">
              <span>Empty Borrowlist</span>
            </button>
          </a>
        </form>
        @else
          <p>Anda belum memasukkan item ke dalam "Borrowlist"</p>
        @endif
        <a href="{{ url('/home') }}">
          <button type="button" class="btn btn-primary btn-flat pull-right">
            <span>Back to Pustaka</span>
          </button>
        </a>
      </div>
      <!-- /.box-body -->
    </div>
  </div>
  <div class="col-md-4">
    <!-- Widget: user widget style 1 -->
    <div class="box box-widget widget-user-2">
      <!-- Add the bg color to the header using any of the bg-* classes -->
      <div class="widget-user-header bg-blue">
        <div class="widget-user-image">
          <img class="img-circle" src="{{asset('bower_components/admin-lte/dist/img/user.png')}}" alt="User Avatar">
        </div>
        <!-- /.widget-user-image -->
        <h3 class="widget-user-username">ensiana</h3>
        <h5 class="widget-user-desc">User</h5>
      </div>
      <div class="box-footer no-padding">
        <ul class="nav nav-stacked">
          @foreach($borrow as $show_item)
            <li><a>{{$show_item->namabk}}</a></li>
          @endforeach
        </ul>
      </div>
    </div>
    <!-- /.widget-user -->
    <div class="callout callout-warning">
      <h4>Ketentuan dan Persyaratan</h4>
      <p align="justify">Adakalanya kami dapat, dengan kebijakan kami, melakukan perubahan pada Perjanjian. Ketika kami melakukan perubahan materi pada Perjanjian, kami
        akan memberikan pemberitahuan penting yang sesuai dengan keadaan, misalnya, dengan menampilkan pemberitahuan penting dalam Layanan atau dengan mengirimkan email. Dalam beberapa kasus, kami akan
        memberitahukan anda sebelumnya, dan kelanjutan penggunaan Layanan setelah perubahan telah dibuat merupakan bentuk penerimaan anda terhadap perubahan tersebut. Oleh karena itu pastikan anda membaca
        pemberitahuan tersebut dengan hati-hati.
      </p>
    </div>
  </div>
</div>
@endsection
