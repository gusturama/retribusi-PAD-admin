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
            "pageLength" : 6,
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
        {{-- @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif --}}
    <div class="card-body">
        <table id="example1" class="table table-bordered table-hover">
        <thead>
        <tr>
            <th>No.</th>
            <th>Skala Usaha</th>
            <th>Jenis Iuran</th>
            <th>Jumlah Iuran</th>
            <th class="text-center">Aksi</th>
        </tr>
        </thead>
        <tbody>
        @php
            $i = 1;
       @endphp
        @foreach($subs as $sub)
        <tr>   
            <td>{{ $i++ }}</td>
            <td>{{ $sub->company_scale->scale}}</td>
            <td>{{ $sub->subscription_type->category}}</td>
            <td>{{ $sub->subscription_amount }}</td>
            <td class="text-center fit">
                <a href="{{ route('iuran-edit', $sub->id) }}" class="btn btn-warning"  data-toggle="tooltip" data-placement="top" title="Edit"><span class="fas fa-pencil-alt"></span></a>
            </td>
        </tr>
        @endforeach
        </tbody>
        </table>
    </div>
    
    
    <!-- /.card-body -->
</div>



@endsection



