@extends('layout.main')
@section('content')
    
<div class="card card-default mt-3">
    <div class="card-header">
        <div class="d-flex justify-content-between">
            <h2>{{$title}}</h2>
            {{-- list tombol --}}
            <div class="tombol">
                <a href="/petugas" class="btn btn-primary"><span class="fas fa-reply"></span> Kembali</a>
            </div>                    
        </div>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form>
      <div class="card-body">
        <div class="form-group">
          <label>Nama</label>
          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan nama " required="required">
        </div>
        <div class="form-group">
            <label for="exampleSelectBorder">Jenis Kelamin</label>
            <select class="custom-select form-control-border" id="exampleSelectBorder" required="required">
              <option>Laki-laki</option>
              <option>Perempuan</option>
            </select>
        </div>
        <div class="row">
            <div class="col-md">
                <div class="form-group">
                    <label>Tempat Lahir</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan tempat lahir ">
                  </div>
            </div>
            <div class="col-md">
                <label>Tanggal Lahir</label>
                <div class="input-group date">
                        <input type="date" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label>Alamat</label>
            {{-- <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan alamat "> --}}
            <textarea name="" class="form-control" rows="2"></textarea>
          </div>
        <div class="row">
            <div class="col-md">
                <div class="form-group">
                    <label for="exampleSelectBorder">Pilih Banjar</label>
                    <select class="custom-select form-control-border" id="exampleSelectBorder">
                      <option>Banjar I</option>
                      <option>Banjar II</option>
                    </select>
                </div>
            </div>
            <div class="col-md">
                <div class="form-group">
                    <label for="exampleSelectBorder">Pilih Tempekan</label>
                    <select class="custom-select form-control-border" id="exampleSelectBorder">
                      <option>Tempekan I</option>
                      <option>Tempekan II</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md">
                <div class="form-group">
                    <label>Nomor HP</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Nomor HP ">
                  </div>
            </div>
            <div class="col-md">
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
            </div>
        </div>
        
        <div class="form-group">
          <label for="exampleFormControlFile1">Foto Profil</label>
          <div class="input-group">
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="inputGroupFile01">
                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
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