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
    <form>
      <div class="card-body">
        <div class="row">
            <div class="col-md">
                <div class="form-group">
                    <label for="exampleSelectBorder">Jenis Usaha</label>
                    <select class="custom-select form-control-border" id="exampleSelectBorder" required="required">
                      <option>Hotel/Penginapan</option>
                      <option>Restoran</option>
                      <option>Usaha Dagang</option>
                    </select>
                </div>
            </div>
            <div class="col-md">
                <div class="form-group">
                    <label for="exampleSelectBorder">Skala Usaha</label>
                    <select class="custom-select form-control-border" id="exampleSelectBorder" required="required">
                      <option>Besar</option>
                      <option>Menengah</option>
                      <option>Kecil</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md">
                <div class="form-group">
                    <label for="exampleSelectBorder">Jenis Pembayaran</label>
                    <select class="custom-select form-control-border" id="exampleSelectBorder" required="required">
                      <option>Bulanan</option>
                      <option>Harian</option>
                    </select>
                </div>
            </div>
            <div class="col-md">
                <div class="form-group">
                    <label>Nominal Iuran</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="50000" required="required">
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