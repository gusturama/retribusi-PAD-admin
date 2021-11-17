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
              <label for="exampleSelectBorder">Status Perkawinan</label>
              <select class="custom-select form-control-border" id="exampleSelectBorder" required="required">
                <option>Kawin</option>
                <option>Belum kawin</option>
              </select>
          </div>
          <div class="form-group">
              <label>Alamat</label>
              {{-- <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan alamat "> --}}
              <textarea name="" class="form-control" rows="2"></textarea>
            </div>
          <div class="row">
              <div class="col-md">
                  <div class="form-group">
                      <div class="form-group">
                          <label>Nomor HP</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan nomor HP " required="required">
                        </div>
                  </div>
              </div>
              <div class="col-md">
                  <div class="form-group">
                      <div class="form-group">
                          <label>Password</label>
                          <input type="Password" class="form-control" id="exampleInputEmail1" placeholder="Masukan password " required="required">
                        </div>
                  </div>
              </div>
          </div>
  
          <div class="row">
              <div class="col-md">
                  <div class="form-group">
                      <label for="exampleFormControlFile1">Foto KTP</label>
                      <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile01">
                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                          </div>
                      </div>
                      <img src="img/sample-ktp.jpg" class="img-thumbnail" alt="...">
                  </div>
              </div>
              <div class="col-md">
                  <div class="form-group">
                      <label for="exampleFormControlFile1">Foto Profil</label>
                      <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile01">
                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                          </div>
                      </div>
                      <img src="dist/img/user2-160x160.jpg" class="img-thumbnail" alt="...">
                  </div>
              </div>
          </div>

          <div class="form-group">
            <label for="exampleSelectBorder">Ubah Status Verifikasi Akun</label>
            <select class="custom-select form-control-border" id="exampleSelectBorder" required="required">
              <option>Terverifikasi</option>
              <option>Belum diverifikasi</option>
              <option>Ditolak</option>
            </select>
        </div>
        
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary btn-block btn-lg">Simpan</button>
      </div>
    </form>
  </div>

@endsection