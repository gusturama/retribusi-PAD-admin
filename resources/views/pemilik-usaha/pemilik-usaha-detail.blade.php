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
                    <a href="{{ route('pemilik-usaha-edit', $user->id) }}" class="btn btn-info"><span class="fas fa-pencil-alt"></span> Edit Data</a>
                    <a href="/pemilik-usaha" class="btn btn-primary"><span class="fas fa-reply"></span> Kembali</a>
                </div>                    
            </div>
        </div>
        <div class="card-body text-lg">
            {{-- foto profil --}}
            @if ($user->photo)
            <div class="foto-profil text-center">
                <img style="width: 200px; height:200px;" src="{{asset('storage/'. $user->photo)}}" class="img-thumbnail rounded" alt="foto user">
            </div>
            @else
            <div class="foto-profil text-center">
                <img style="width: 200px; height:200px;" src="https://upload.wikimedia.org/wikipedia/commons/9/99/Sample_User_Icon.png" class="img-thumbnail rounded" alt="foto user">
            </div>
            @endif
           
            {{-- data profil --}}
            <strong></i>Nama</strong>
            <p class="text-muted">
                {{$user->name}}
            </p>
            <hr>
            <strong></i>Email</strong>
            <p class="text-muted">
                {{$user->email}}
            </p>
            <hr>
            <strong></i>Nomor HP</strong>
            <p class="text-muted">
                {{$user->phone}}

            </p>
            <hr>
            
        </div>
    </div>
</div>

@endsection
