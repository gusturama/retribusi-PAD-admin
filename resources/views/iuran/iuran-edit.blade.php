@extends('layout.main')
@section('content')
    
<div class="card card-default mt-3">
    <div class="card-header">
        <div class="d-flex justify-content-between">
            <h2>{{$title}}</h2>
            {{-- list tombol --}}
            <div class="tombol">
                <a href="/iuran" class="btn btn-primary"><span class="fas fa-reply"></span> Kembali</a>
            </div>                    
        </div>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="POST" action="{{ route('iuran-update', $sub->id) }}">
      @csrf
      
      <div class="card-body">
        <div class="row">
          <div class="col-md">
            <div class="form-group">
              <label>Skala Usaha</label>
              <input type="text" class="form-control" name="nama_jenis_usaha" value="{{$sub->company_scale->scale}}" disabled>
            </div> 
          </div>

          <div class="col-md">
            <div class="form-group">
              <label>Jenis Iuran</label>
              <input type="text" class="form-control" name="nama_jenis_usaha" value="{{$sub->subscription_type->category}}" disabled>
            </div> 
          </div>

        </div>
        
        <div class="form-group">
          <label>Nominal Iuran</label>
          <input type="number" class="form-control" name="nominal" value="{{$sub->subscription_amount}}" required>
        </div> 
        
        
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary btn-block btn-lg">Simpan</button>
      </div>
    </form>
  </div>

@endsection