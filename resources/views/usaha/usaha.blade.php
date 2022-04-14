@section('js')
      <!-- Page specific script -->
      <script>
        $(function () {
            $("#example1").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "order": [[ 3, "desc" ]]
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
        <a href="/usaha-tambah" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Data</a>
        <table id="example1" class="table table-bordered table-hover">
        <thead>
        <tr>
            {{-- <th>No</th> --}}
            <th class="align-middle">Nama Usaha</th>
            <th>Nama Pemilik</th>
            <th class="align-middle">Banjar</th>
            <th class="text-center align-middle">Status</th>
            <th class="text-center align-middle">Aksi</th>
        </tr>
        </thead>
        <tbody>
        @php
            $i = 1;
        @endphp
        @foreach ($companies as $company)
        <tr>
            {{-- <td>{{$i++}}</td> --}}
            <td>{{$company->name}}</td>
            <td>{{$company->user->name}}</td>
            <td>
                @if ($company->banjar['name'] == null)
                Belum dipilih
                @else
                {{ $company->banjar['name'] }}
                @endif</td>
            <td class="text-center fit">
                @if ($company->status == 'wait_verified')
                    <div class="btn btn-block btn-warning" style="cursor: default;"><span class="fas fa-circle-notch"></span>     
                @elseif($company->status == 'verified')
                    <div class="btn btn-block btn-success" style="cursor: default;"><span class="fas fa-check"></span>
                @else
                    <div class="btn btn-block btn-danger" style="cursor: default;"><span class="fas fa-times"></span>
                @endif

                
                @if ($company->status == 'wait_verified')
                    Menunggu verifikasi
                @elseif($company->status == 'verified')
                    Terverifikasi
                @else
                    Diblokir
                @endif</div>
            </td>
            <td class="text-center fit">
                <a href="{{ route('usaha-detail', $company->id) }}" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Lihat Detail"><span class="fas fa-eye"></span></a>
                <a href="{{ route('usaha-edit', $company->id) }}" class="btn btn-warning"  data-toggle="tooltip" data-placement="top" title="Edit"><span class="fas fa-pencil-alt"></span></a>
                <a href="{{ route('usaha-hapus', $company->id) }}" class="btn btn-danger" onclick="return confirm('Anda yakin menghapus data ini?')" data-toggle="tooltip" data-placement="top" title="Hapus"><span class="fas fa-trash"></span></a>
            </td>
        </tr>   
        @endforeach
        </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>



@endsection



