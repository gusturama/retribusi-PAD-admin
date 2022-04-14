@extends('layout.main')

@section('page-title')
    {{$title}}
@endsection

@section('page-breadcrumb')
    
@endsection

@section('content')

<div class="row">
    <div class="col-lg-4 col-6">
      <!-- small box -->
      <div class="small-box bg-info">
        <div class="inner">
          <h3>{{ $usaha }}</h3>

          <p>Usaha</p>
        </div>
        <div class="icon">
          <i class="ion ion-bag"></i>
        </div>
        <a href="/usaha" class="small-box-footer"
          >Kelola data <i class="fas fa-arrow-circle-right"></i
        ></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-4 col-6">
      <!-- small box -->
      <div class="small-box bg-success">
        <div class="inner">
          <h3>{{ $pemilik }}<sup style="font-size: 20px"></sup></h3>

          <p>Pemilik Usaha</p>
        </div>
        <div class="icon">
          <i class="ion ion-stats-bars"></i>
        </div>
        <a href="/pemilik-usaha" class="small-box-footer"
          >Kelola data <i class="fas fa-arrow-circle-right"></i
        ></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-4 col-6">
      <!-- small box -->
      <div class="small-box bg-warning">
        <div class="inner">
          <h3>{{ $petugas }}</h3>

          <p>Petugas</p>
        </div>
        <div class="icon">
          <i class="ion ion-person"></i>
        </div>
        <a href="/petugas" class="small-box-footer"
          >Kelola data <i class="fas fa-arrow-circle-right"></i
        ></a>
      </div>
    </div>
    <!-- ./col -->
    <!-- ./col -->
  </div>

@endsection