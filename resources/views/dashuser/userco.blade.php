@extends('dashuser.home')
@section('userco')
@if(session()->has('msg'))
<div class="alert alert-success alert-dismissible">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <h4><i class="icon fa fa-ban"></i> {{ session()->get('msg') }}</h4>
  You have successfully logged in!
</div>
@endif
<div class="callout callout-info">
  <h4>Welcome to Librarian</h4>

  <p>Add the layout-top-nav class to the body tag to get this layout. This feature can also be used with a
    sidebar! So use this class if you want to remove the custom dropdown menus from the navbar and use regular
    links instead.</p>
</div>
<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Pustaka Buku</h3>
  </div>
  <div class="box-body">
    <div class="row">
      <!-- /.item -->
      @foreach($item as $valueitem)
      <div class="col-md-3">
        <div class="box box-primary box-solid">
          <div class="box-header with-border">
            <h3 class="box-title">{{ $valueitem->namabk }}</h3>
          </div>
          <div class="box-body">
            <div class="row">
              <div class="col-sm-6">
                <img class="img-responsive" src="{{asset('bower_components/admin-lte/dist/img/cover.jpg')}}">
              </div>
              <div class="col-sm-6">
                <span>Author : </span>
                <p>{{ $valueitem->author }}</p>
                <div class="row">
                  <div class="col-md-6">
                    <button type="button" data-toggle="modal" data-target="#item-detail-{{ $valueitem->idb }}" class="btn btn-default btn-flat">
                      <i class="fa fa-search-plus"></i>
                    </button>
                  </div>
                  <div class="col-md-6">
                    <div class="modal fade" id="item-detail-{{ $valueitem->idb }}">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Detail Info : <b>{{ $valueitem->namabk }}</b></h4>
                          </div>
                          <div class="modal-body">
                            <div class="row">
                              <div class="col-md-6">
                                <img class="img-responsive" src="{{asset('bower_components/admin-lte/dist/img/cover.jpg')}}">
                              </div>
                              <div class="col-md-6">
                                <div class="box-body">
                                  <div class="form-group">
                                    <label>Nama Buku</label>
                                    <input name="namabk" type="text" class="form-control" value="{{ $valueitem->namabk }}" disabled>
                                  </div>
                                  <div class="form-group">
                                    <label>Kategori</label>
                                    <input name="cathegory" type="text" class="form-control" value="{{ $valueitem->cathegory }}" disabled>
                                  </div>
                                  <div class="form-group">
                                    <label>Penulis</label>
                                    <input name="author" type="text" class="form-control" value="{{ $valueitem->author }}" disabled>
                                  </div>
                                  <div class="form-group">
                                    <label>Tahun</label>
                                    <input name="tahun" type="text" class="form-control" maxlength="4" value="{{ $valueitem->tahun }}" disabled>
                                  </div>
                                  <label>Rating</label>
                                  <div class="input-group">
                                    <input name="score" type="text" class="form-control" maxlength="3" value="{{ $valueitem->score }}" disabled>
                                    @if($valueitem->score > 70)
                                      <span class="input-group-addon"><i class="fa fa-thumbs-up"></i></span>
                                    @elseif(($valueitem->score <= 70) && ($valueitem->score > 50))
                                      <span class="input-group-addon"><b>~</b></span>
                                    @else
                                      <span class="input-group-addon"><i class="fa fa-thumbs-down"></i></span>
                                    @endif
                                  </div><br>
                                  <form role="form" method="post" action="{{ url('/toconfirm') }}">
                                    <fieldset>
                                      <legend>Borrowlist Option</legend>
                                      {{ csrf_field() }}
                                      <div class="form-group">
                                        <label>Tanggal Pinjam</label>
                                        <input name="pinjam" type="date" class="form-control" required>
                                      </div>
                                      <div class="form-group">
                                        <label>Tanggal Kembali</label>
                                        <input name="kembali" type="date" class="form-control" required>
                                      </div>
                                      <input name="ids" type="hidden" class="form-control" value="1">
                                      <input name="idb" type="hidden" class="form-control" value="{{ $valueitem->idb }}">
                                      <input name="namabk" type="hidden" class="form-control" value="{{ $valueitem->namabk }}">
                                      <div class="box-footer">
                                        <button type="submit" class="btn btn-primary btn-flat">Add to "Borrowlist"</button>
                                      </div>
                                    </fieldset>
                                  </form>
                                <!-- /.box-body -->
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
      <!-- /.item -->
    </div>
  </div>
  <!-- /.box-body -->
</div>
@endsection
