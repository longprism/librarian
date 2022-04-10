@extends('dashadmin.admin')
<!-- general form elements -->
@section('members')
<div class="row">
  <div class="col-md-4">
    <div class="box box-danger">
      <div class="box-header with-border">
        <h3 class="box-title">Store Book</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form role="form" action="{{url('/bookco/reg')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="box-body">
          <div class="form-group">
            <label>Nama Buku</label>
            <input name="namabk" type="text" class="form-control" required placeholder="Name Buku">
          </div>
          <div class="form-group">
            <label>Kategori</label>
            <select name="cathegory" class="form-control">
              <option value="Education">Education</option>
              <option value="Romance">Romance</option>
              <option value="Science">Science</option>
              <option value="Horror">Horror</option>
              <option value="Comedy">Comedy</option>
              <option value="Thriller">Thriller</option>
            </select>
          </div>
          <div class="form-group">
            <label>Penulis</label>
            <input name="author" type="text" class="form-control" required placeholder="Penulis">
          </div>
          <div class="form-group">
            <label>Tahun</label>
            <input name="tahun" type="text" class="form-control" maxlength="4" required placeholder="Tahun">
          </div>
          <label>Rating</label>
          <div class="input-group">
            <input name="score" type="text" class="form-control" maxlength="3" required placeholder="Rating">
            <span class="input-group-addon"><b>%</b></span>
          </div><br>
          <div class="form-group">
            <label>Upload Thumbnail</label>
            <input name="imgfile" type="file">
          </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <button type="submit" class="btn btn-primary">Store</button>
        </div>
      </form>
    </div>
  </div>
  <div class="col-md-8">
    <div class="box box-danger">
      <div class="box-header with-border">
        <h3 class="box-title">Book List</h3>
      </div>
      <div class="box-body">
        <div class="row">
          @foreach($books as $bookvalue)
          <!-- /.item -->
          <div class="clearfix visible-md"></div>
          <div class="col-md-4">
            <div class="box box-danger box-solid">
              <div class="box-header with-border">
                <h3 class="box-title">{{ $bookvalue->namabk }}</h3>
              </div>
              <div class="box-body">
                <div class="row">
                  <div class="col-sm-6">
                    <img class="img-responsive" src="{{asset('bower_components/admin-lte/dist/img/cover.jpg')}}">
                  </div>
                  <div class="col-sm-6">
                    <span>Author : </span>
                    <p>{{ $bookvalue->author }}</p>
                    <button type="button" data-toggle="modal" data-target="#detail-modal-{{ $bookvalue->idb }}" class="btn btn-info btn-flat">
                      <i class="fa fa-info"></i>
                    </button>
                    <div class="modal fade" id="detail-modal-{{ $bookvalue->idb }}">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Detail Info : <b>{{ $bookvalue->namabk }}</b></h4>
                          </div>
                          <div class="modal-body">
                            <div class="row">
                              <div class="col-md-6">
                                <img class="img-responsive" src="{{asset('bower_components/admin-lte/dist/img/cover.jpg')}}">
                              </div>
                              <div class="col-md-6">
                                <form role="form" action="{{url('/bookco/upt/'.$bookvalue->idb)}}" method="post" enctype="multipart/form-data">
                                  {{ csrf_field() }}
                                  <div class="box-body">
                                    <div class="form-group">
                                      <label>Nama Buku</label>
                                      <input name="namabk" type="text" class="form-control" value="{{ $bookvalue->namabk }}">
                                    </div>
                                    <div class="form-group">
                                      <label>Kategori</label>
                                      <select name="cathegory" class="form-control">
                                        <option value="Education">Education</option>
                                        <option value="Romance">Romance</option>
                                        <option value="Science">Science</option>
                                        <option value="Horror">Horror</option>
                                        <option value="Comedy">Comedy</option>
                                        <option value="Thriller">Thriller</option>
                                      </select>
                                    </div>
                                    <div class="form-group">
                                      <label>Penulis</label>
                                      <input name="author" type="text" class="form-control" value="{{ $bookvalue->author }}">
                                    </div>
                                    <div class="form-group">
                                      <label>Tahun</label>
                                      <input name="tahun" type="text" class="form-control" maxlength="4" value="{{ $bookvalue->tahun }}">
                                    </div>
                                    <label>Rating</label>
                                    <div class="input-group">
                                      <input name="score" type="text" class="form-control" maxlength="3" value="{{ $bookvalue->score }}">
                                      <span class="input-group-addon"><b>%</b></span>
                                    </div><br>
                                    <div class="form-group">
                                      <label>Upload Thumbnail</label>
                                      <input name="imgfile" type="file">
                                    </div>
                                  </div>
                                  <!-- /.box-body -->
                                  <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">Edit</button>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <a href="{{url('/bookco/die/'.$bookvalue->idb)}}">
                    <button type="button" class="btn btn-danger btn-flat">
                      <i class="fa fa-trash"></i>
                    </button></a>
                  </div>
                </div>
              </div>
          </div>
        </div>
        <!-- /.item -->
        @endforeach
      </div>
      </div>
    </div>
  </div>
</div>
</div>
<!-- /.box -->
@endsection
