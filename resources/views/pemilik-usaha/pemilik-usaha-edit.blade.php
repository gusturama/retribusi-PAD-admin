@extends('layout.main')
@section('content')
    
<div class="card card-default mt-3">
    <div class="card-header">
        <div class="d-flex justify-content-between">
            <h2>{{$title}}</h2>
            {{-- list tombol --}}
            <div class="tombol">
                <a href="/pemilik-usaha" class="btn btn-primary"><span class="fas fa-reply"></span> Kembali</a>
            </div>                    
        </div>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <form method="POST" enctype="multipart/form-data" action="{{ route('pemilik-usaha-update', $user->id) }}">
      <div class="foto-profil text-center mb-2">
        @if ($user->photo)
            @if (str_contains($user->photo, 'http','https') == true)
              <img style="width: 200px; height:200px;" src="{{$user->photo}}" class="img-thumbnail rounded" alt="foto user">
            @else
              <img style="width: 200px; height:200px;" src="{{asset('storage/'. $user->photo)}}" class="img-thumbnail rounded" alt="foto aset">
            @endif
        @else
        <img style="width: 200px; height:200px;" src="https://upload.wikimedia.org/wikipedia/commons/9/99/Sample_User_Icon.png" class="img-thumbnail rounded" alt="foto user">
        @endif
      </div>

      @csrf
      <div class="card-body">
        <div class="form-group">
          <label>Nama</label>
          <input type="text" name="nama" class="form-control" value="{{$user->name}}" required="required">
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="email" name="email" class="form-control" value="{{$user->email}}" required="required">
        </div>
        <div class="form-group">
          <label>Nomor HP</label>
          <input type="text" name="no_hp" class="form-control" value="{{$user->phone}}" required="required">
        </div>

      <div class="form-group">
          <label for="exampleFormControlFile1">Ubah Foto Profil (opsional)</label>
          
            <div class="foto-profil text-center">
              @if ($user->photo)
                  @if (str_contains($user->photo, 'http','https') == true)
                    <img style="width: 200px; height:200px;" src="{{$user->photo}}" class="img-thumbnail rounded" alt="foto user">
                  @else
                    <img style="width: 200px; height:200px;" src="{{asset('storage/'. $user->photo)}}" class="img-thumbnail rounded" alt="foto aset">
                  @endif
              @else
              <img style="width: 200px; height:200px;" src="https://upload.wikimedia.org/wikipedia/commons/9/99/Sample_User_Icon.png" class="img-thumbnail rounded" alt="foto user">
              @endif
            </div>

          
          <div class="input-group">
              <div class="custom-file">
                <input type="file" name="foto" class="custom-file-input" id="foto" onchange="previewImage()">
                <label class="custom-file-label" for="inputGroupFile01">Pilih file</label>
              </div>
          </div>
      </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary btn-block btn-lg">Simpan</button>
      </div>
    </form>
  </div>

@endsection

@section('js')
<script>
  function previewImage(){
    const image = document.querySelector('#foto');
    const imgPreview = document.querySelector('.img-preview');

    imgPreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFREvent){
      imgPreview.src = oFREvent.target.result;
    }
  }
  
</script>
@endsection