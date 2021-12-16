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
          <label>Nama Petugas</label>
          <select class="custom-select form-control-border" id="exampleSelectBorder" required="required">
            <option>Petugas 1</option>
            <option>Petugas 2</option>
            <option>Petugas 3</option>
          </select>
        </div>
        <div class="form-group">
          <label>Usaha</label>
          <select class="custom-select form-control-border" id="exampleSelectBorder" required="required">
            <option>Usaha 1</option>
            <option>Usaha 2</option>
            <option>Usaha 3</option>
          </select>
        </div>
        <div class="row">
          <div class="col-md">
            <div class="form-group">
              <label>Tanggal Transaksi</label>
              <div class="input-group date">
                      <input type="date" value="01-01-2022" class="form-control datetimepicker-input" data-target="#reservationdate"/>
              </div>
            </div>
          </div>
          <div class="col-md">
            <div class="form-group">
              <label>Jenis Iuran</label>
              <select class="custom-select form-control-border" id="exampleSelectBorder" disabled>
                <option>Harian</option>
                <option selected>Bulanan</option>
              </select>
            </div>
          </div>
        </div>
        
        <div class="row">
            <div class="col-md">
                <div class="form-group">
                    <label>Nominal Iuran</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="Rp 50.000" disabled>
                  </div>
            </div>
            <div class="col-md">
              <div class="form-group">
                <label>Nominal Dibayarkan</label>
                <input type="text" class="form-control" value="Rp 50.000" id="exampleInputEmail1" placeholder="Masukan nominal yang dibayarkan">
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