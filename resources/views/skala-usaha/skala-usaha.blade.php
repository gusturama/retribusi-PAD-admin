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
        {{-- <a href="{{ route('skala-usaha-tambah') }}" class="btn btn-success mb-2"><i class="fa fa-plus"></i> Tambah Data</a> --}}
        <table id="example1" class="table table-bordered table-hover">
        <thead>
        <tr>
            <th>No.</th>
            <th>Nama Skala Usaha</th>
            <th class="text-center">Aksi</th>
        </tr>
        </thead>
        <tbody>
        @php
            $i = 1;
       @endphp
        @foreach($company_scales as $company_scale)
        <tr>   
            <td>{{ $i++ }}</td>
            <td>{{ $company_scale->scale }}</td>
            <td class="text-center fit">
                <a href="{{ route('skala-usaha-edit', $company_scale->id) }}" class="btn btn-warning"  data-toggle="tooltip" data-placement="top" title="Edit"><span class="fas fa-pencil-alt"></span></a>
            </td>
        </tr>
        @endforeach
        </tbody>
        </table>
    </div>
    
    
    <!-- /.card-body -->
</div>



@endsection



