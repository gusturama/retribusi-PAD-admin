@extends('layout.main')
@section('content')
    
<div class="card card-default mt-3">
    <div class="card-header">
        <div class="d-flex justify-content-between">
            <h2>{{$title}}</h2>
            {{-- list tombol --}}
            <div class="tombol">
                <a href="/jenis-usaha" class="btn btn-primary"><span class="fas fa-reply"></span> Kembali</a>
            </div>                    
        </div>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="POST" action="{{ route('jenis-usaha-update', $company_type->id) }}">
      @csrf
      <div class="card-body">
        <div class="form-group">
          <label>Nama Jenis Usaha</label>
          <input type="text" class="form-control" name="nama_jenis_usaha" id="exampleInputEmail1" value="{{$company_type->type}}">
        </div>        
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary btn-block btn-lg">Simpan</button>
      </div>
    </form>
  </div>

@endsection