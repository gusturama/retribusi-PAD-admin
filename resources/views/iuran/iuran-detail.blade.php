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
                    <a href="/iuran-edit" class="btn btn-info"><span class="fas fa-pencil-alt"></span> Edit Data</a>
                    <a href="/iuran" class="btn btn-primary"><span class="fas fa-reply"></span> Kembali</a>
                </div>                    
            </div>
        </div>
        <div class="card-body text-lg">
            {{-- data detail --}}
            <strong></i>Jenis Usaha</strong>
            <p class="text-muted">
                Hotel/Penginapan
            </p>
            <hr>
            <strong></i>Skala Usaha</strong>
            <p class="text-muted">
                Besar
            </p>
            <hr>
            <strong></i>Jenis Pembayaran</strong>
            <p class="text-muted">
                Bulanan
            </p>
            <hr>
            <strong></i>Nominal Iuran</strong>
            <p class="text-muted">
                Rp. 500.000
            </p>
            <hr>
        </div>
    </div>
</div>

@endsection
