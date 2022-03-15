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
                    <a href="{{ route('banjar-edit', $banjar->id) }}" class="btn btn-info"><span class="fas fa-pencil-alt"></span> Edit Data</a>
                    <a href="/banjar" class="btn btn-primary"><span class="fas fa-reply"></span> Kembali</a>
                </div>                    
            </div>
        </div>
        <div class="card-body text-lg">
            {{-- data profil --}}
            <strong></i>Nama Banjar</strong>
            <p class="text-muted">
                {{ $banjar->name }}
            </p>
            <hr>
            <strong></i>Alamat</strong>
            <p class="text-muted">
                {{ $banjar->address }}
            </p>
            <hr>            
        </div>
    </div>
</div>

@endsection
