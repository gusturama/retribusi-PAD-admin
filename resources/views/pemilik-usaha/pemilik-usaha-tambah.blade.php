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

    <form method="POST" enctype="multipart/form-data" action="{{ route('pemilik-usaha-store') }}">
      @csrf
      <div class="card-body">
        <div class="form-group">
          <label>Nama</label>
          <input type="text" name="nama" class="form-control" placeholder="Masukan nama " required="required">
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Masukan email " required="required">
        </div>
        <div class="form-group">
          <label>Nomor HP</label>
          <input type="text" name="no_hp" class="form-control" placeholder="Masukan nomor handphone " required="required">
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="password" name="password" class="form-control" id="exampleInputEmail1" placeholder="Masukan nomor handphone " required="required">
        </div>
    
      <div class="form-group">
          <label for="exampleFormControlFile1">Foto Profil</label>
          
            <img  src="" alt="" class="img-fluid img-preview mb-2">
          
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
      imgPreview.style.width = '200px';
      imgPreview.style.height = '200px';     
    }
  }
  
</script>
@endsection