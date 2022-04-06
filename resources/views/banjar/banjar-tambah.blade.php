@extends('layout.main')
@section('content')
    
<div class="card card-default mt-3">
    <div class="card-header">
        <div class="d-flex justify-content-between">
            <h2>{{$title}}</h2>
            {{-- list tombol --}}
            <div class="tombol">
                <a href="/banjar" class="btn btn-primary"><span class="fas fa-reply"></span> Kembali</a>
            </div>                    
        </div>
    </div>
   <!-- /.card-header -->
    <!-- form start -->
    <form method="POST" action="{{ route('banjar-store') }}">
      @csrf
      <div class="card-body">
        <div class="form-group">
          <label>Nama Banjar</label>
          <input type="text" class="form-control" name="nama_banjar" id="exampleInputEmail1">
        </div>
        <div class="form-group">
          <label>Alamat</label>
          <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary btn-block btn-lg">Simpan</button>
      </div>
    </form>
  </div>

@endsection