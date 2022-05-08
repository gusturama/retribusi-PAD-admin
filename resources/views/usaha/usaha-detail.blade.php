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
    var lat = {{ json_encode($company->latitude) }};
    var lng = {{ json_encode($company->longitude) }};
    var mymap = L.map('lokasi-peta').setView([lat, lng], 15);
    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		maxZoom: 18,
		id: 'mapbox/streets-v11',
		tileSize: 512,
		zoomOffset: -1
    }).addTo(mymap);
    var lokasi_usaha = L.marker([lat, lng]).addTo(mymap);
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
                    <a href="{{ route('usaha-edit', $company->id) }}" class="btn btn-info"><span class="fas fa-pencil-alt"></span> Edit Data</a>
                    <a href="/usaha" class="btn btn-primary"><span class="fas fa-reply"></span> Kembali</a>
                </div>                    
            </div>
        </div>
        <div class="card-body text-lg">
            {{-- foto usaha --}}
            <div class="foto-profil text-center mb-3">
                @if ($company->photos)
                    @if (str_contains($company->photos, 'http','https') == true)
                        <img src="{{$company->photos}}" class="img-thumbnail rounded" alt="..." width="20%">
                    @else
                    <img src="{{asset('storage/'. $company->photos)}}" class="img-thumbnail rounded" alt="..." width="20%">
                    @endif
                @else
                <img src="https://cdn1-production-images-kly.akamaized.net/Qv3K-G5ZO24Kfcn-EPw12PtiOaE=/640x360/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/3165463/original/001411700_1593427405-table-in-vintage-restaurant-6267.jpg" class="img-thumbnail rounded" alt="..." width="20%">
                @endif
                <div class="strong text-center">Foto Usaha</div>
            </div>
            {{-- data profil --}}

            <strong></i>Status Verifikasi</strong>
            <p class="">
                @if ($company->status == 'wait_verified')
                <div class="btn btn-block btn-warning" style="cursor: default;"><span class="fas fa-circle-notch"></span>     
                @elseif($company->status == 'verified')
                <div class="btn btn-block btn-success" style="cursor: default;"><span class="fas fa-check"></span>
                @else
                <div class="btn btn-block btn-danger" style="cursor: default;"><span class="fas fa-times"></span>
                @endif

                @if ($company->status == 'wait_verified')
                    Menunggu verifikasi
                @elseif($company->status == 'verified')
                    Terverifikasi
                @else
                    Diblokir
                @endif
            </div>

            <div class="row mt-3">
                <div class="col-md">
                    
                    <strong></i>Nama Usaha</strong>
                    <p class="text-muted">
                    {{$company->name}} 
                    </p>
                    <hr>
                    
                </div>
                <div class="col-md">
                    <strong></i>Nama Pemilik</strong>
                    <p class="text-muted">
                        {{$company->user->name}} 
                    </p>
                    <hr>
                    
                </div>
            </div>

            <div class="row">
                <div class="col-md">
                    <strong></i>Jenis Usaha</strong>
                    <p class="text-muted">
                        {{$company->company_type->type}}
                    </p>
                    <hr>
                </div>
                <div class="col-md">
                    <strong></i>Skala Usaha</strong>
                    <p class="text-muted">
                        {{$company->subscription->company_scale->scale}}
                    </p>
                    <hr>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md">
                    <strong></i>Jenis Iuran</strong>
                    <p class="text-muted">
                        {{$company->subscription->subscription_type->category}}
                    </p>
                    <hr>
                </div>
                <div class="col-md">
                    <strong></i>Banjar</strong>
                    <p class="text-muted">
                        @if ($company->banjar['name'] == null)
                            Banjar belum dipilih
                        @endif
                        {{$company->banjar['name']}}
                    </p>
                    <hr>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md">
                    <strong></i>Alamat</strong>
                    <p class="text-muted">
                        {{$company->address}}
                    </p>
                    <hr>
                </div>
                <div class="col-md">
                    <strong></i>Nominal Iuran</strong>
                    <p class="text-muted">
                        {{$company->subscription->subscription_amount}}
                    </p>
                    <hr>
                </div>
            </div>
            
            <strong></i>Dokumen</strong>
            <p class="text-muted">
            @if ($company->documents)
                @if (str_contains($company->documents, 'http','https') == true)
                    <a target="_blank" href="{{$company->documents}}" class="btn btn-outline-secondary"> Unduh File</a>
                @else
                {{-- <img src="{{asset('storage/'. $company->documents)}}" class="img-thumbnail rounded" alt="..." width="30%"> --}}
                <a href="{{asset('storage/'.$company->documents)}}" class="btn btn-outline-secondary"></a>

                @endif
            @else
            dokumen usaha belum diupload
            @endif
            </p>
            <hr>
            <strong></i> Lokasi pada Peta</strong>
                <div id="lokasi-peta"></div>
            <hr>
            
        </div>
    </div>
</div>

@endsection
