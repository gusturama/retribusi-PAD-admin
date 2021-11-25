@extends('layout.main')
@section('content')
    
<div class="card card-default mt-3">
    <div class="card-header">
        <div class="d-flex justify-content-between">
            <h2>{{$title}}</h2>
            {{-- list tombol --}}
            <div class="tombol">
                <a href="/denda" class="btn btn-primary"><span class="fas fa-reply"></span> Kembali</a>
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
                    <label for="exampleSelectBorder">Skala Usaha</label>
                    <select disabled class="custom-select form-control-border" id="exampleSelectBorder" required="required">
                      <option>Besar</option>
                      <option>Menengah</option>
                      <option>Kecil</option>
                    </select>
                </div>
            </div>
            <div class="col-md">
              <div class="form-group">
                  <label>Nominal Denda</label>
                  <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Masukan nominal " required="required">
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