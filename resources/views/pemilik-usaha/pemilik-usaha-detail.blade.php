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
                    <a href="/pemilik-usaha-edit" class="btn btn-info"><span class="fas fa-pencil-alt"></span> Edit Data</a>
                    <a href="/pemilik-usaha" class="btn btn-primary"><span class="fas fa-reply"></span> Kembali</a>
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
            <strong></i>Status Perkawinan</strong>
            <p class="text-muted">
                Kawin
            </p>
            <hr>
            <strong></i> Alamat</strong>
            <p class="text-muted">
                Jalan Merpati no XI, Padangsambian
            </p>
            <hr>
            <strong></i> Foto KTP</strong>
            <p class="text-muted">
                <img src="/img/sample-ktp.jpg" class="img-thumbnail rounded" alt="...">
            </p>
            <hr>
            <strong></i>Nomor HP</strong>
            <p class="text-muted">
                0809989898
            </p>
            <hr>
            <strong></i>Status Verifikasi Akun</strong>
            <p class="">
                <div class="btn btn-success"><span class="fas fa-check"></span> Terverifikasi</div>
            </p>
        </div>
    </div>
</div>

@endsection
