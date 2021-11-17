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
        <a href="/pemilik-usaha-tambah" class="btn btn-success mb-2"><i class="fa fa-plus"></i> Tambah Data</a>
        <p><span class="fas fa-info-circle"></span> Masuk ke halaman Edit untuk mengubah status verifikasi Pemilik Usaha</p>
        <table id="example1" class="table table-bordered table-hover">
        <thead>
        <tr>
            <th>Nama</th>
            <th>No HP</th>
            <th>Alamat</th>
            <th class="text-center">Status</th>
            <th class="text-center">Aksi</th>
        </tr>
        </thead>
        <tbody>
        @for ($i = 10; $i < 35; $i++)
        <tr>
            @php
                    $status = collect(["Terverifikasi", "Belum Diverifikasi", "Ditolak"]);
                    $acak_status = $status->random();
                    if ($acak_status == $status[0]) {
                        $ket = array("fa-check", "btn-success");
                    }elseif ($acak_status == $status[1]) {
                        $ket = array("fa-circle-notch", "btn-warning");
                    }else {
                        $ket = array("fa-times", "btn-danger");
                    }
            @endphp

            <td>Pemilik Usaha {{$i}}</td>
            <td>08899999</td>
            <td>Jalan Cempaka no XIII, Banjar Sari, Padangsambian</td>
            <td class="text-center fit">
                <div class="btn btn-block {{$ket[1]}}"><span class="fas {{$ket[0]}}"></span> {{$acak_status}}</div>
            </td>
            <td class="text-center fit">
                <a href="/pemilik-usaha-detail" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Lihat Detail"><span class="fas fa-eye"></span></a>
                <a href="/pemilik-usaha-edit" class="btn btn-warning"  data-toggle="tooltip" data-placement="top" title="Edit"><span class="fas fa-pencil-alt"></span></a>
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



