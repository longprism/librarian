@extends('dashuser.home')
@section('userco')
<section class="invoice">
  <!-- title row -->
  <div class="row">
    <div class="col-xs-12">
      <h2 class="page-header">
        <i class="fa fa-bank"></i> PT. Librarian
        <small id="date-id" class="pull-right"></small>
        <script type="text/javascript">
          n =  new Date();
          y = n.getFullYear();
          m = n.getMonth() + 1;
          d = n.getDay();
          document.getElementById("date-id").innerHTML = m + "/" + d + "/" + y;
        </script>
      </h2>
    </div>
    <!-- /.col -->
  </div>
  <!-- info row -->
  <div class="row invoice-info">
    <div class="col-sm-4 invoice-col">
      From
      <address>
        <strong>Librarian</strong><br>
      </address>
    </div>
    <!-- /.col -->
    <div class="col-sm-4 invoice-col">
      To
      <address>
        <strong>John Doe</strong><br>
      </address>
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->

  <!-- Table row -->
  <div class="row">
    <div class="col-xs-12 table-responsive">
      <table class="table table-striped">
        <thead>
        <tr>
          <th width="9.5%">ID User</th>
          <th width="9.5%">ID Buku</th>
          <th width="30%">Nama Buku</th>
          <th width="10%">Pinjam</th>
          <th width="10%">Kembali</th>
        </tr>
        </thead>
        <tbody>
          @foreach( $borrow as $voice_item )
          <tr>
            <td>{{ $voice_item->ids }}</td>
            <td>{{ $voice_item->idb }}</td>
            <td>{{ $voice_item->namabk }}</td>
            <td>{{ $voice_item->pinjam }}</td>
            <td>{{ $voice_item->kembali }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->

  <div class="row">
    <!-- accepted payments column -->
    <div class="col-xs-6">
      <p class="lead">Ketentuan Peminjaman</p>
      <p class="text-muted well well-sm no-shadow warning" style="margin-top: 10px;">
        Tanda bukti harus diprint dan disimpan sebagai tanda bukti saat peminjaman.
         Dan tanda bukti sebaiknya didownload dalam bentuk PDF atau DOC agar tidak hilang.
      </p>
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->

  <!-- this row will not appear when printing -->
  <div class="row no-print">
    <div class="col-xs-12">
      <a href="{{url('/invoice-print')}}" target="_blank" class="btn btn-default btn-flat"><i class="fa fa-print"></i> Print</a>
      <button type="button" class="btn btn-primary btn-flat pull-right" style="margin-right: 5px;">
        <i class="fa fa-download"></i> Generate PDF
      </button>
      <a href="{{url('/home')}}"><button type="button" class="btn btn-success btn-flat pull-right" style="margin-right: 5px;">
        <i class="fa fa-home"></i>Back to Pustaka
      </button>
    </div>
  </div>
</section>
@endsection
