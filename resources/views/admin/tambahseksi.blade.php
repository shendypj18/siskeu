@extends('admin.admin')
@section('content')

    <!-- /.card-header -->
    <!-- form start -->
<form role="form" method="POST" action="{{URL::to('/dataseksi/tambah/simpan')}}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="card-body">
        <div class="form-group">
            <label>Nama Seksi</label>
            <input type="text" class="form-control" name="nama_seksi">
          </div>
          <label>Nama Kepala</label>
          <div class="input-group mb-3">
            <input type="text" class="form-control" name="nama_kepala">
          </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
 
    
@endsection