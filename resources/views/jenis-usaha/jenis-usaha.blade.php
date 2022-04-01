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

<div class="card mt-3">
    <div class="card-header">
        <h1 class="card-title">Kelola Data {{$title}}</h1>
        {{-- @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif --}}
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <a href="{{ route('jenis-usaha-tambah') }}" class="btn btn-success mb-2"><i class="fa fa-plus"></i> Tambah Data</a>
        <table id="example1" class="table table-bordered table-hover">
        <thead>
        <tr>
            <th>No.</th>
            <th>Nama Jenis Usaha</th>
            <th class="text-center">Aksi</th>
        </tr>
        </thead>
        <tbody>
        @php
            $i = 1;
       @endphp
        @foreach($company_types as $company_type)
        <tr>   
            <td>{{ $i++ }}</td>
            <td>{{ $company_type->type }}</td>
            <td class="text-center fit">
                <a href="{{ route('jenis-usaha-edit', $company_type->id) }}" class="btn btn-warning"  data-toggle="tooltip" data-placement="top" title="Edit"><span class="fas fa-pencil-alt"></span></a>
            </td>
        </tr>
        @endforeach
        </tbody>
        </table>
    </div>
    
    
    <!-- /.card-body -->
</div>



@endsection



