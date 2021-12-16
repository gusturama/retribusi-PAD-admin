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
                    <a href="/transaksi-edit" class="btn btn-info"><span class="fas fa-pencil-alt"></span> Edit Data</a>
                    <a href="/transaksi" class="btn btn-primary"><span class="fas fa-reply"></span> Kembali</a>
                </div>                    
            </div>
        </div>
        <div class="card-body text-lg">
            {{-- data profil --}}
            <strong></i>Nama Petugas</strong>
            <p class="text-muted">
                I Wayan Ariyadi
            </p>
            <hr>
            <strong></i>Usaha</strong>
            <p class="text-muted">
                ACK Padangsambian
            </p>
            <hr>
            <strong></i>Tanggal Transaksi</strong>
            <p class="text-muted">
                1 Januari 2022
            </p>
            <hr>
            <strong></i>jenis Iuran/Pembayaran</strong>
            <p class="text-muted">
                Bulanan
            </p>
            <hr>
            <strong></i>Nominal Iuran</strong>
            <p class="text-muted">
                Rp 50.000
            </p>
            <hr>
            <strong></i>Nominal Dibayarkan</strong>
            <p class="text-muted">
                Rp. 50.000
            </p>
            <hr>
            
        </div>
    </div>
</div>

@endsection
