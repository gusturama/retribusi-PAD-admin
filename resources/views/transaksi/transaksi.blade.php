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
            "pageLength" : 10,
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
            <th>Nama Usaha</th>
            <th>Nama Petugas</th>
            <th>Nominal Iuran</th>
            <th>Nominal Dibayarkan</th>
            <th class="text-center">Aksi</th>
        </tr>
        </thead>
        <tbody>
        @php
            $i = 1;
       @endphp
        @foreach($trans as $tran)
        <tr>   
            <td>{{ $i++ }}</td>
            <td>{{ $tran->transaction->company->name}}</td>
            <td>{{ $tran->transaction->staff->user->name}}</td>
            <td>{{ $tran->subscription_amount}}</td>
            <td>{{ $tran->transaction_amount}}</td>
            <td class="text-center fit">
                <a href="{{ route('transaksi-edit', $tran->id) }}" class="btn btn-warning"  data-toggle="tooltip" data-placement="top" title="Edit"><span class="fas fa-pencil-alt"></span></a>
            </td>
        </tr>
        @endforeach
        </tbody>
        </table>
    </div>
    
    
    <!-- /.card-body -->
</div>



@endsection
