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
        <a href="/pemilik-usaha" class="btn btn-primary"><i class="fa"></i> Kembali</a> 
        <a href="{{ route('pemilik-usaha-restore-all') }}" class="btn btn-success" onclick="return confirm('Anda yakin restore semua data dari sampah?')"> Restore Semua</a>
        <a href="{{ route('pemilik-usaha-force-delete-all') }}" class="btn btn-danger" onclick="return confirm('Anda yakin menghapus semua data di sampah secara permanen?')" > Hapus Permanen Semua</a>
        <table id="example1" class="table table-bordered table-hover">
        <thead>
        <tr>
            <th>No</th>
            <th>Nama Pemilik</th>
            <th>Email</th>
            <th>No HP</th>
            <th class="text-center">Aksi</th>
        </tr>
        </thead>
        <tbody>
        @php
        $i = 1;
        @endphp
        @foreach($owners as $user)
        <tr>   
            <td>{{ $i++ }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->phone }}</td>
            
            <td class="text-center fit">
                <a href="{{ route('pemilik-usaha-restore', $user->id) }}" class="btn btn-success" onclick="return confirm('Anda yakin restore data dari sampah?')">Restore</a>
                <a href="{{ route('pemilik-usaha-force-delete', $user->id) }}" class="btn btn-danger" onclick="return confirm('Anda yakin menghapus data ini?')">Hapus Permanen</a>
            </td>
        </tr>
        @endforeach
        </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>



@endsection



