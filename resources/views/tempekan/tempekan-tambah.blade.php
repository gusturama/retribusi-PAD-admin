@extends('layout.main')
@section('content')
    
<div class="card card-default mt-3">
    <div class="card-header">
        <div class="d-flex justify-content-between">
            <h2>{{$title}}</h2>
            {{-- list tombol --}}
            <div class="tombol">
                <a href="/banjar-detail/{{$banjar->id}}" class="btn btn-primary"><span class="fas fa-reply"></span> Kembali</a>
            </div>                    
        </div>
    </div>
   <!-- /.card-header -->
    <!-- form start -->
    <form method="POST" action="{{ route('tempekan-store') }}">
      @csrf
      <div class="card-body">
        <div class="form-group">
          <label>Nama Tempekan</label>
          <input type="text" class="form-control" name="nama_tempekan" id="exampleInputEmail1">
          <input type="hidden" class="form-control" name="banjar_id" value="{{$banjar->id}}">
        </div>        
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary btn-block btn-lg">Simpan</button>
      </div>
    </form>
  </div>

@endsection