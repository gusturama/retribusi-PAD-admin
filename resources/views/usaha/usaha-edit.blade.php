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
    var latit = {{ json_encode($company->latitude) }};
    var longi = {{ json_encode($company->longitude) }};
    var mymap = L.map('lokasi-peta').setView([latit, longi], 15);
    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		maxZoom: 18,
		id: 'mapbox/streets-v11',
		tileSize: 512,
		zoomOffset: -1
    }).addTo(mymap);
    var myMarker = L.marker([latit, longi], {title: "PinLokasi", draggable: true})
		.addTo(mymap)
		.on('dragend', function() {
			var coord = String(myMarker.getLatLng()).split(',');
			console.log(coord);
			var lat = coord[0].split('(');
			console.log(lat);
			var lng = coord[1].split(')');
			console.log(lng);
			myMarker.bindPopup("<b>Koordinat:</b> <br>Lat:" + lat[1] + "<br>Lng:" + lng[0] + ".");

            $("#lat").val(lat[1]);
            $("#lng").val(lng[0]);

            
		});
    
        function previewImage(){
            const image = document.querySelector('#foto');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent){
            imgPreview.src = oFREvent.target.result;
            imgPreview.style.width = '400px';
            // imgPreview.style.height = '200px';     
            }
        }

        function previewDocument(){
            const dokumen = document.querySelector('#dok');
            const docPreview = document.querySelector('.doc-preview');

            docPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(dokumen.files[0]);

            oFReader.onload = function(oFREvent){
            docPreview.src = oFREvent.target.result;
            docPreview.style.width = '400px';
            // imgPreview.style.height = '200px';     
            }
        }
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
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
  @endif
    <form method="POST" enctype="multipart/form-data" action="{{ route('usaha-update', $company->id) }}">
        @csrf
      <div class="card-body">

        <div class="form-group">
            <label for="exampleSelectBorder"><strong>Status Verifikasi</strong></label>
            <select name="status" class="custom-select form-control-border" id="exampleSelectBorder" required="required">
              <option value="verified" @if ($company->status == "verified")
                  selected
              @endif>Terverifikasi</option>
              <option value="wait_verified" @if ($company->status == "wait_verified")
                  selected
              @endif>Belum diverifikasi</option>
              <option value="blocked" @if ($company->status == "blocked")
                  selected
              @endif>Ditolak</option>
            </select>
        </div>

        <div class="form-group">
          <label>Nama Usaha</label>
          <input type="text" name="nama_usaha" class="form-control" id="exampleInputEmail1" placeholder="Masukan nama usaha" value="{{$company->name}}" required="required">
        </div>
        <div class="form-group">
            <label for="exampleSelectBorder">Pilih Pemilik Usaha</label>
            <select name="pemilik" class="custom-select form-control-border" id="exampleSelectBorder" required="required">
              @foreach ($owners as $owner)
                  <option value="{{$owner->id}}" @if ($company->user->id == $owner->id)
                      selected
                  @endif>{{$owner->name}}</option>
              @endforeach
            </select>
        </div>
        <div class="row">
            <div class="col-md">
                <div class="form-group">
                    <label>Jenis Usaha</label>
                    <select name="jenis_usaha" class="custom-select form-control-border" id="exampleSelectBorder" required="required">
                        @foreach ($company_types as $company_type)
                            <option value="{{$company_type->id}}" @if ($company_type->id == $company->company_type->id)
                                selected
                            @endif> {{$company_type->type}}</option>
                        @endforeach
                    </select>
                  </div>
            </div>
            <div class="col-md">
                <div class="form-group">
                    <label>Banjar</label>
                    <select name="banjar" class="custom-select form-control-border" id="exampleSelectBorder" required="required">
                        @foreach ($banjars as $banjar)
                            <option value="{{$banjar->id}}" @if ($banjar->id == $company->banjar['id'])
                                selected
                            @endif>{{$banjar->name}}</option>
                        @endforeach
                    </select>
                  </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md">
                <div class="form-group">
                    <label>Jenis Pembayaran Iuran</label>
                    <select name="kategori" class="custom-select form-control-border" id="exampleSelectBorder" required="required">
                        @foreach ($subscription_types as $subs_type)
                            <option value="{{$subs_type->id}}" @if ($subs_type->id == $company->subscription->subscription_type->id)
                                selected
                            @endif> {{$subs_type->category}}</option>
                        @endforeach
                    </select>
                  </div>
            </div>
            <div class="col-md">
                <div class="form-group">
                    <label>Skala Usaha</label>
                    <select name="skala" class="custom-select form-control-border" id="exampleSelectBorder" required="required">
                        @foreach ($company_scales as $comp_scale)
                            <option value="{{$comp_scale->id}}" @if ($comp_scale->id == $company->subscription->company_scale->id)
                                selected
                            @endif>{{$comp_scale->scale}}</option>
                        @endforeach
                    </select>
                  </div>
            </div>
        </div>

        <div class="form-group">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control" rows="2">{{ $company->address }}</textarea>
        </div>

        <div class="row">
            <div class="col-md">
                <div class="form-group">
                    <label for="exampleFormControlFile1">Dokumen</label>
                    @if ($company->documents)
                        @if (str_contains($company->documents, 'http','https') == true)
                            <img src="{{$company->documents}}" class="img-fluid doc-preview mb-2 d-block" alt="..." width="30%">
                        @else
                        <img src="{{asset('storage/'. $company->documents)}}" class="img-fluid doc-preview mb-2 d-block" alt="..." width="30%">
                        @endif
                    @else
                    <img src="https://media.istockphoto.com/vectors/contract-or-document-signing-icon-document-folder-with-stamp-and-text-vector-id1179640294?k=20&m=1179640294&s=612x612&w=0&h=O2IBtlV52-6gWSAeyozPIFkfZ-LzHnpXBw2tOuUToj8=" class="img-fluid doc-preview mb-2 d-block" alt="..." width="30%">
                    @endif
                    {{-- <img  src="" alt="" class="img-fluid doc-preview mb-2"> --}}
                    <div class="input-group">
                        <div class="custom-file">
                          <input name="dokumen" type="file" class="custom-file-input"  id="dok" onchange="previewDocument()">
                          <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="form-group">
                    <label for="exampleFormControlFile1">Foto Usaha</label>
                    @if ($company->photos)
                        @if (str_contains($company->photos, 'http','https') == true)
                            <img src="{{$company->photos}}" class="img-fluid img-preview mb-2 d-block" alt="..." width="30%">
                        @else
                        <img src="{{asset('storage/'. $company->photos)}}" class="img-fluid img-preview mb-2 d-block" alt="..." width="30%">
                        @endif
                    @else
                    <img src="https://cdn1-production-images-kly.akamaized.net/Qv3K-G5ZO24Kfcn-EPw12PtiOaE=/640x360/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/3165463/original/001411700_1593427405-table-in-vintage-restaurant-6267.jpg" class="img-fluid img-preview mb-2 d-block" alt="..." width="30%">
                    @endif
                    {{-- <img  src="" alt="" class="img-fluid img-preview mb-2"> --}}
                    <div class="input-group">
                        <div class="custom-file">
                          <input name="foto" type="file" class="custom-file-input" id="foto" onchange="previewImage()">
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

        

      </div>
      <!-- /.card-body -->

      {{-- input lokasi --}}
      <input type="hidden" name="lat" value="{{$company->latitude}}" id="lat"> 
      <input type="hidden" name="lng" value="{{$company->longitude}}" id="lng"> 


      <div class="card-footer">
        <button type="submit" class="btn btn-primary btn-block btn-lg">Simpan</button>
      </div>
    </form>
  </div>

@endsection
