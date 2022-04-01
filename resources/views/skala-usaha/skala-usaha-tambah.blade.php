@extends('layout.main')
@section('content')

<div class="card card-default mt-3">
    <div class="card-header">
        <div class="d-flex justify-content-between">
            <h2>{{$title}}</h2>
            {{-- list tombol --}}
            <div class="tombol">
                <a href="/skala-usaha" class="btn btn-primary"><span class="fas fa-reply"></span> Kembali</a>
            </div>                    
        </div>
    </div>
   <!-- /.card-header -->
    <!-- form start -->
    <form method="POST" action="{{ route('skala-usaha-store') }}">
      @csrf
      <div class="card-body">
        <div class="form-group">
          <label>Nama Skala Usaha</label>
          <input type="text" class="form-control" name="nama_skala_usaha" id="exampleInputEmail1">
        </div>        
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary btn-block btn-lg">Simpan</button>
      </div>
    </form>
  </div>

@endsection