@extends('layout.main')

@section('js')
      <!-- Page specific script -->
      <script>
        $(function () {
            $("#tb_tempekan").DataTable({
            "language":{
                "emptyTable": "Belum ada data"
            },
            "responsive": true, 
            "lengthChange": false, 
            "autoWidth": false, 
            "pageLength" : 5
            // "buttons": ["copy", "csv", "excel", "pdf", "print"]
            })
        });
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
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

    {{-- tempekan --}}
    <div class="card card-default">
        {{-- card header --}}
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <h2>Tempekan</h2>
                {{-- list tombol --}}
                <div class="tombol">
                    <a href="{{ route('tempekan-tambah', $banjar->id) }}" class="btn btn-info"> Tambah Tempekan</a>
                </div>                    
            </div>
        </div>
        <div class="card-body">
            <table id="tb_tempekan" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Tempekan</th>
                        <th>Banjar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i=1;
                    @endphp
                    @foreach ($tempekans as $tempekan)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{ $tempekan->name }}</td>
                            <td>{{ $banjar->name }}</td>
                            <td class="text-center fit">
                                <a href="{{ route('tempekan-edit', $tempekan->id) }}" class="btn btn-warning"  data-toggle="tooltip" data-placement="top" title="Edit"><span class="fas fa-pencil-alt"></span></a>
                                <a href="{{ route('tempekan-hapus', $tempekan->id) }}" class="btn btn-danger" onclick="return confirm('Anda yakin menghapus data ini?')" data-toggle="tooltip" data-placement="top" title="Hapus"><span class="fas fa-trash"></span></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>            
        </div>
    </div>
</div>

@endsection
