@extends('layouts.admin')
@section('title') Dashboard @endsection
@section('content')


<div class="callout callout-success">
    <h5>
        Welcome to Praktek Dokter Mandalica 🚀 Super User
    </h5>
    <p>
        Dashboard ini kami menyebutnya Super User adalah salah satu fitur yang bisa digunakan untuk melihat data-data yang ada di aplikasi ini. Dibawah ini merupakan data appointment pasien dan lain sebagainya.
    </p>
</div>

<div class="row">
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-success">
        <div class="inner">
          <h3>{{$count = DB::table('pasiens')->count()}}</h3>
          <p>Pasien Buat Appointment</p>
        </div>
        <div class="icon">
          <i class="ion ion-stats-bars"></i>
        </div>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-warning">
        <div class="inner">
          <h3>0</h3>

          <p>Pasien Telah Sembuh</p>
        </div>
        <div class="icon">
          <i class="ion ion-person-add"></i>
        </div>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-danger">
        <div class="inner">
          <h3>Drip</h3>

          <p>Pasien belum di verify</p>
        </div>
        <div class="icon">
          <i class="ion ion-pie-graph"></i>
        </div>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
          <div class="inner">
            <h3>Drip</h3>

            <p>Pasien belum di verify</p>
          </div>
          <div class="icon">
            <i class="ion ion-pie-graph"></i>
          </div>
        </div>
      </div>
  </div>

@endsection
