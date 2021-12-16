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

@section('content')

<h1 class="mt-3">Data {{$title}}</h1>
<div class="card mt-3">
    <div class="card-header">
        <h1 class="card-title">Kelola Data {{$title}}</h1>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <a href="/transaksi-tambah" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Data</a>
        <table id="example1" class="table table-bordered table-hover">
        <thead>
        <tr>
            <th>Nama Petugas</th>
            <th>Nama Usaha</th>
            <th>Tanggal</th>
            <th class="text-center">Aksi</th>
        </tr>
        </thead>
        <tbody>
        @for ($i = 10; $i < 35; $i++)
        <tr>
            <td>Petugas {{$i}}</td>
            <td>Usaha {{$i}}</td>
            <td>1 Januari 2022</td>
            <td class="text-center fit">
                <a href="/transaksi-detail" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Lihat Detail"><span class="fas fa-eye"></span></a>
                <a href="/transaksi-edit" class="btn btn-warning"  data-toggle="tooltip" data-placement="top" title="Edit"><span class="fas fa-pencil-alt"></span></a>
                <a href="#" class="btn btn-danger" onclick="return confirm('Anda yakin menghapus data ini?')" data-toggle="tooltip" data-placement="top" title="Hapus"><span class="fas fa-trash"></span></a>
            </td>
        </tr>   
        @endfor
        </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>



@endsection



