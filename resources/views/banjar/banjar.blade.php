@section('js')
      <!-- Page specific script -->
      <script>
        $(function () {
            $("#example1").DataTable({
            "language":{
                "emptyTable": "Belum ada data"
            },
            "responsive": true, 
            "lengthChange": false, 
            "autoWidth": false, 
            "pageLength" : 5,
            buttons: ["copy", "csv", "excel", "pdf", "print"]
            })
        });
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
        </script>  
@endsection

@extends('layout.main')

@section('page-title')
    {{$title}}
@endsection

@section('content')

<div class="card">

    <div class="card-body">
        {{-- <a href="{{ route('banjar-tambah') }}" class="btn btn-success mb-2"><i class="fa fa-plus"></i> Tambah Data</a> --}}
        <table id="example1" class="table table-bordered table-hover">
        <thead>
        <tr>
            <th>No.</th>
            <th>Nama Banjar</th>
            <th>Alamat</th>
            <th class="text-center">Aksi</th>
        </tr>
        </thead>
        <tbody>
        @php
            $i = 1;
       @endphp
        @foreach($banjars as $banjar)
        <tr>   
            <td>{{ $i++ }}</td>
            <td>{{ $banjar->name }}</td>
            <td>{{ $banjar->address }}</td>
            <td class="text-center fit">
                {{-- <a href="{{ route('banjar-detail', $banjar->id) }}" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Lihat Detail"><span class="fas fa-eye"></span></a> --}}
                <a href="{{ route('banjar-edit', $banjar->id) }}" class="btn btn-warning"  data-toggle="tooltip" data-placement="top" title="Edit"><span class="fas fa-pencil-alt"></span></a>
                {{-- <a href="{{ route('banjar-hapus', $banjar->id) }}" class="btn btn-danger" onclick="return confirm('Anda yakin menghapus data ini?')" data-toggle="tooltip" data-placement="top" title="Hapus"><span class="fas fa-trash"></span></a> --}}
            </td>
        </tr>
        @endforeach
        </tbody>
        </table>
    </div>
    
    
    <!-- /.card-body -->
</div>



@endsection



