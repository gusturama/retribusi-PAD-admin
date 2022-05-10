@section('js')
      <!-- Page specific script -->
      <script>
        $(function () {
            $("#example1").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            // "buttons": ["copy", "csv", "excel", "pdf", "print"]
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
        <a href="/petugas-tambah" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Data</a>
        <a href="{{ route('petugas-sampah') }}" class="btn btn-danger"><i class="fa fa-trash"></i> Tempat Sampah</a>
        <table id="example1" class="table table-bordered table-hover">
        <thead>
        <tr>
            <th>No</th>
            <th>Nama Petugas</th>
            <th>Email</th>
            <th>No HP</th>
            <th>Banjar</th>
            <th>Saldo</th>
            <th class="text-center">Aksi</th>
        </tr>
        </thead>
        <tbody>
        @php
        $i = 1;
        @endphp
        @foreach($staffs as $staff)
        <tr>   
            <td>{{ $i++ }}</td>
            <td>{{ $staff->user->name }}</td>
            <td>{{ $staff->user->email }}</td>
            <td>{{ $staff->user->phone }}</td>
            <td>{{ $staff->banjar->name }}</td>
            <td>{{ $staff->balance }}</td>
            
            <td class="text-center fit">
                <a href="{{ route('petugas-detail', $staff->user->id) }}" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Lihat Detail"><span class="fas fa-eye"></span></a>
                <a href="{{ route('petugas-edit', $staff->user->id) }}" class="btn btn-warning"  data-toggle="tooltip" data-placement="top" title="Edit"><span class="fas fa-pencil-alt"></span></a>
                <a href="{{ route('petugas-hapus', $staff->user->id) }}" class="btn btn-danger" onclick="return confirm('Anda yakin menghapus data ini?')" data-toggle="tooltip" data-placement="top" title="Hapus"><span class="fas fa-trash"></span></a>
            </td>
        </tr>
        @endforeach
        </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>



@endsection



