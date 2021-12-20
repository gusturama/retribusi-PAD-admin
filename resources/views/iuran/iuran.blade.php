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
        <a href="/iuran-tambah" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Data</a>
        <table id="example1" class="table table-bordered table-hover">
        <thead>
        <tr>
            <th>Jenis Usaha</th>
            <th>Skala Usaha</th>
            <th>Jenis Pembayaran</th>
            <th>Nominal Iuran</th>
            <th class="text-center">Aksi</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Hotel/Penginapan</td>
            <td>Besar</td>
            <td>Bulanan</td>
            <td>Rp. 500.000</td>
            <td class="text-center fit">
                <a href="/iuran-edit" class="btn btn-warning"  data-toggle="tooltip" data-placement="top" title="Edit"><span class="fas fa-pencil-alt"></span></a>
                <a href="#" class="btn btn-danger" onclick="return confirm('Anda yakin menghapus data ini?')" data-toggle="tooltip" data-placement="top" title="Hapus"><span class="fas fa-trash"></span></a>
            </td>
        </tr>
        <tr>
            <td>Hotel/Penginapan</td>
            <td>Menengah</td>
            <td>Bulanan</td>
            <td>Rp. 250.000</td>
            <td class="text-center fit">
                <a href="/iuran-edit" class="btn btn-warning"  data-toggle="tooltip" data-placement="top" title="Edit"><span class="fas fa-pencil-alt"></span></a>
                <a href="#" class="btn btn-danger" onclick="return confirm('Anda yakin menghapus data ini?')" data-toggle="tooltip" data-placement="top" title="Hapus"><span class="fas fa-trash"></span></a>
            </td>
        </tr>
        <tr>
            <td>Hotel/Penginapan</td>
            <td>Kecil</td>
            <td>Bulanan</td>
            <td>Rp. 100.000</td>
            <td class="text-center fit">
                <a href="/iuran-edit" class="btn btn-warning"  data-toggle="tooltip" data-placement="top" title="Edit"><span class="fas fa-pencil-alt"></span></a>
                <a href="#" class="btn btn-danger" onclick="return confirm('Anda yakin menghapus data ini?')" data-toggle="tooltip" data-placement="top" title="Hapus"><span class="fas fa-trash"></span></a>
            </td>
        </tr>
        <tr>
            <td>Restoran</td>
            <td>Besar</td>
            <td>Bulanan</td>
            <td>Rp. 500.000</td>
            <td class="text-center fit">
                <a href="/iuran-edit" class="btn btn-warning"  data-toggle="tooltip" data-placement="top" title="Edit"><span class="fas fa-pencil-alt"></span></a>
                <a href="#" class="btn btn-danger" onclick="return confirm('Anda yakin menghapus data ini?')" data-toggle="tooltip" data-placement="top" title="Hapus"><span class="fas fa-trash"></span></a>
            </td>
        </tr>
        <tr>
            <td>Restoran</td>
            <td>Menengah</td>
            <td>Bulanan</td>
            <td>Rp. 250.000</td>
            <td class="text-center fit">
                <a href="/iuran-edit" class="btn btn-warning"  data-toggle="tooltip" data-placement="top" title="Edit"><span class="fas fa-pencil-alt"></span></a>
                <a href="#" class="btn btn-danger" onclick="return confirm('Anda yakin menghapus data ini?')" data-toggle="tooltip" data-placement="top" title="Hapus"><span class="fas fa-trash"></span></a>
            </td>
        </tr>
        <tr>
            <td>Restoran</td>
            <td>Kecil</td>
            <td>Bulanan</td>
            <td>Rp. 100.000</td>
            <td class="text-center fit">
                <a href="/iuran-edit" class="btn btn-warning"  data-toggle="tooltip" data-placement="top" title="Edit"><span class="fas fa-pencil-alt"></span></a>
                <a href="#" class="btn btn-danger" onclick="return confirm('Anda yakin menghapus data ini?')" data-toggle="tooltip" data-placement="top" title="Hapus"><span class="fas fa-trash"></span></a>
            </td>
        </tr>
        <tr>
            <td>Usaha Dagang</td>
            <td>Menengah</td>
            <td>Bulanan</td>
            <td>Rp. 60.000</td>
            <td class="text-center fit">
                <a href="/iuran-edit" class="btn btn-warning"  data-toggle="tooltip" data-placement="top" title="Edit"><span class="fas fa-pencil-alt"></span></a>
                <a href="#" class="btn btn-danger" onclick="return confirm('Anda yakin menghapus data ini?')" data-toggle="tooltip" data-placement="top" title="Hapus"><span class="fas fa-trash"></span></a>
            </td>
        </tr>   
        <tr>
            <td>Usaha Dagang</td>
            <td>Kecil</td>
            <td>Harian</td>
            <td>Rp. 1.000</td>
            <td class="text-center fit">
                <a href="/iuran-edit" class="btn btn-warning"  data-toggle="tooltip" data-placement="top" title="Edit"><span class="fas fa-pencil-alt"></span></a>
                <a href="#" class="btn btn-danger" onclick="return confirm('Anda yakin menghapus data ini?')" data-toggle="tooltip" data-placement="top" title="Hapus"><span class="fas fa-trash"></span></a>
            </td>
        </tr> 
        </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>



@endsection



