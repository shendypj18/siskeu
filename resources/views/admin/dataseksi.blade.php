@extends('admin.admin')
@section('content')
<div class="card">
            <div class="card-header">
              <h3 class="card-title">Data seksi</h3>
            </div>
            <div class="card-body pad table-responsive">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
                Tambah Data
              </button>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nama Seksi</th>
                  <th>Nama Kepala</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($seksi as $data)
                <tr>
                  <td>{{$data->nama_seksi}}</td>
                  <td>{{$data->nama_kepala}}</td>
                <td> <a href="dataseksi/edit/{{$data->id_seksi}}" class="btn-sm btn-info" data-toggle="modal" data-target="#modal-default-edit{{$data->id_seksi}}">Edit</a>
                     <a href="dataseksi/{{$data->id_seksi}}" class="btn-sm btn-danger">Hapus</a></td>
                </tr>
                @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!--modal tambah data -->
          <div class="modal fade" id="modal-default">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Tambah Data</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
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
                </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary swalDefaultSuccess" >Save changes</button>
                </form>
                </div>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </div>
          <!-- /.modal -->

           <!--modal Edit data -->
           @foreach ($seksi as $data)
           <div class="modal fade" id="modal-default-edit{{$data->id_seksi}}">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Edit Data</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form role="form" method="POST" action="dataseksi/update/{{$data->id_seksi}}">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                      <div class="card-body">
                        <div class="form-group">
                          <label>Nama Seksi</label>
                        <input type="text" class="form-control" name="nama_seksi" value="{{$data->nama_seksi}}">
                          </div>
                          <label>Nama Kepala</label>
                          <div class="input-group mb-3">
                          <input type="text" class="form-control" name="nama_kepala" value="{{$data->nama_kepala}}">
                          </div>
                      </div>
                      <!-- /.card-body -->                                 
                </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
                
                </div>
              </div>
             
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </div>
          <!-- /.modal -->
         @endforeach
<script type="text/javascript">
$(function() {
    const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });


$('.swalDefaultSuccess').click(function() {
      Toast.fire({
        type: 'success',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    </script>
  
@endsection

