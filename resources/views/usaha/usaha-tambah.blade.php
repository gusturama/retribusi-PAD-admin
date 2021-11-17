@extends('layout.main')

@section('css')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
    integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
    crossorigin=""/>

    <style>
        #lokasi-peta { height: 50vh; }
    </style>
@endsection

@section('js')
     <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
    integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
    crossorigin=""></script>
    
    <script>
    var mymap = L.map('lokasi-peta').setView([-8.654318665189694, 115.18853724120854], 15);
    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		maxZoom: 18,
		id: 'mapbox/streets-v11',
		tileSize: 512,
		zoomOffset: -1
    }).addTo(mymap);
    var myMarker = L.marker([-8.654627812853127, 115.18781245268403], {title: "PinLokasi", draggable: true})
		.addTo(mymap)
		.on('dragend', function() {
			var coord = String(myMarker.getLatLng()).split(',');
			console.log(coord);
			var lat = coord[0].split('(');
			console.log(lat);
			var lng = coord[1].split(')');
			console.log(lng);
			myMarker.bindPopup("<b>Koordinat:</b> <br>Lat:" + lat[1] + "<br>Lng:" + lng[0] + ".");
		});

    </script>
    
@endsection

@section('content')
    
<div class="card card-default mt-3">
    <div class="card-header">
        <div class="d-flex justify-content-between">
            <h2>{{$title}}</h2>
            {{-- list tombol --}}
            <div class="tombol">
                <a href="/usaha" class="btn btn-primary"><span class="fas fa-reply"></span> Kembali</a>
            </div>                    
        </div>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form>
      <div class="card-body">
        <div class="form-group">
          <label>Nama Usaha</label>
          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan nama usaha " required="required">
        </div>
        <div class="form-group">
            <label for="exampleSelectBorder">Pilih Pemilik Usaha</label>
            <select class="custom-select form-control-border" id="exampleSelectBorder" required="required">
              <option>Pemilik Usaha 1</option>
              <option>Pemilik Usaha 2</option>
              <option>Pemilik Usaha 3</option>
            </select>
        </div>
        <div class="row">
            <div class="col-md">
                <div class="form-group">
                    <label>Jenis Usaha</label>
                    <select class="custom-select form-control-border" id="exampleSelectBorder" required="required">
                        <option>Jenis Usaha 1</option>
                        <option>Jenis Usaha 2</option>
                        <option>Jenis Usaha 3</option>
                    </select>
                  </div>
            </div>
            <div class="col-md">
                <label>Skala Usaha</label>
                <select class="custom-select form-control-border" id="exampleSelectBorder" required="required">
                    <option>Besar</option>
                    <option>Menengah</option>
                    <option>Kecil</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md">
                <div class="form-group">
                    <label>Banjar</label>
                    <select class="custom-select form-control-border" id="exampleSelectBorder" required="required">
                        <option>Banjar 1</option>
                        <option>Banjar 2</option>
                        <option>Banjar 3</option>
                    </select>
                  </div>
            </div>
            <div class="col-md">
                <label>Tempekan</label>
                <select class="custom-select form-control-border" id="exampleSelectBorder" required="required">
                    <option>Tempekan 1</option>
                    <option>Tempekan 2</option>
                    <option>Tempekan 3</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <textarea name="" class="form-control" rows="2"></textarea>
        </div>

        <div class="row">
            <div class="col-md">
                <div class="form-group">
                    <label for="exampleFormControlFile1">Foto Surat</label>
                    <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="inputGroupFile01">
                          <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="form-group">
                    <label for="exampleFormControlFile1">Foto Usaha</label>
                    <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="inputGroupFile01">
                          <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="form-group">
            <label>Pilih Lokasi pada Peta <span class="font-weight-normal">(geser Pin untuk memindahkan)</span></label>
            <div id="lokasi-peta">

            </div>
        </div>

        <div class="form-group">
            <label for="exampleSelectBorder">Status Verifikasi</label>
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