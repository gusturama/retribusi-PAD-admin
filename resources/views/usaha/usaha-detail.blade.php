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
    var lokasi_usaha = L.marker([-8.654627812853127, 115.18781245268403]).addTo(mymap);
    </script>
    
@endsection

@section('content')
    
<div class="col-lg mt-3">
    <div class="card card-default">
        {{-- card header --}}
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <h2>{{$title}}</h2>
                {{-- list tombol --}}
                <div class="tombol">
                    <a href="/usaha-edit" class="btn btn-info"><span class="fas fa-pencil-alt"></span> Edit Data</a>
                    <a href="/usaha" class="btn btn-primary"><span class="fas fa-reply"></span> Kembali</a>
                </div>                    
            </div>
        </div>
        <div class="card-body text-lg">
            {{-- foto usaha --}}
            <div class="foto-profil text-center mb-3">
                <img src="dist/img/photo1.png" class="img-thumbnail rounded" alt="..." width="60%">
                <div class="strong text-center">Foto Usaha</div>
            </div>
            {{-- data profil --}}
            <strong></i>Nama Usaha</strong>
            <p class="text-muted">
                Usaha 1
            </p>
            <hr>
            <strong></i>Nama Pemilik</strong>
            <p class="text-muted">
                Pemilik Usaha 1
            </p>
            <hr>
            <strong></i>Jenis Usaha</strong>
            <p class="text-muted">
                Usaha Dagang
            </p>
            <hr>
            <strong></i>Skala Usaha</strong>
            <p class="text-muted">
                Menengah
            </p>
            <hr>
            <strong></i>Banjar</strong>
            <p class="text-muted">
                Banjar I
            </p>
            <hr>
            <strong></i>Tempekan</strong>
            <p class="text-muted">
                Kaja
            </p>
            <hr>
            <strong></i> Alamat</strong>
            <p class="text-muted">
                Jalan Merpati no XI, Padangsambian
            </p>
            <hr>
            <strong></i> Foto Surat</strong>
            <p class="text-muted">
                <img src="/img/sku.jpg" class="img-thumbnail rounded" alt="...">
            </p>
            <hr>
            <strong></i> Lokasi pada Peta</strong>
                <div id="lokasi-peta"></div>
            <hr>
            <strong></i>Status Verifikasi</strong>
            <p class="">
                <div class="btn btn-success"><span class="fas fa-check"></span> Terverifikasi</div>
            </p>
        </div>
    </div>
</div>

@endsection
