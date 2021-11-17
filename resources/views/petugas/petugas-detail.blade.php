@extends('layout.main')
@section('content')
    
<div class="col-lg mt-3">
    <div class="card card-default">
        {{-- card header --}}
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <h2>{{$title}}</h2>
                {{-- list tombol --}}
                <div class="tombol">
                    <a href="/petugas-edit" class="btn btn-info"><span class="fas fa-pencil-alt"></span> Edit Data</a>
                    <a href="/petugas" class="btn btn-primary"><span class="fas fa-reply"></span> Kembali</a>
                </div>                    
            </div>
        </div>
        <div class="card-body text-lg">
            {{-- foto profil --}}
            <div class="foto-profil text-center">
                <img src="dist/img/user2-160x160.jpg" class="img-thumbnail rounded" alt="...">
            </div>
            {{-- data profil --}}
            <strong></i>Nama</strong>
            <p class="text-muted">
                I Wayan Ariyadi
            </p>
            <hr>
            <strong></i>Jenis Kelamin</strong>
            <p class="text-muted">
                Laki-laki
            </p>
            <hr>
            <strong></i>Tempat dan Tanggal Lahir</strong>
            <p class="text-muted">
                Gianyar, 11 Februari 1980
            </p>
            <hr>
            <strong></i>Tempekan</strong>
            <p class="text-muted">
                Tempekan Kaja
            </p>
            <hr>
            <strong></i>Banjar</strong>
            <p class="text-muted">
                Banjar Padang
            </p>
            <hr>
            <strong></i>Nomor HP</strong>
            <p class="text-muted">
                0809989898
            </p>
            <hr>
            <strong></i> Alamat</strong>
            <p class="text-muted">
                Jalan Merpati no XI, Padangsambian
            </p>
            <hr>
            
        </div>
    </div>
</div>

@endsection
