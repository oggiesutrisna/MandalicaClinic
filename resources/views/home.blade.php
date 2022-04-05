@extends('layouts.admin')
@section('title')
    Dashboard
@endsection
@section('content')
    <div class="callout callout-success">
        <h5>
            Welcome to Praktek Dokter Mandalica 🚀 Super User
        </h5>
        <p>
            Dashboard ini kita sebut Super User adalah salah satu fitur yang bisa digunakan untuk melihat data-data yang ada
            di aplikasi ini. Dibawah ini merupakan data appointment pasien dan lain sebagainya.
        </p>
    </div>

    <div class="row">
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{ $count = DB::table('pasiens')->count() }}</h3>
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
                    <h3>{{ $count = DB::table('pasiens')->count() }}</h3>

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
            <div class="small-box bg-primary">
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

    <div class="callout callout-warning">
        <h5>
            Changelogs
        </h5>
        <p>
            Versi One-Three Update :
        </p>
        <p>
            1. Fitur Blog telah ditambahkan
        </p>
        <p>
            2. Re-Design Landing Page untuk Fitur blog yang bisa di post.
        </p>
        <p>
            3. Anda bisa menyalin (copy) qr secara native di <a href="{{ route('pasiens.index') }}">Pasien Menu</a>
        </p>
        <p>
            Note : Update ini masih belum sempurna. Jika anda menemukan bug dan glitch bisa langsung lapor ke whatsapp : <a
                href="https://api.whatsapp.com/send?phone=087846048999&text=gantengbangetsihkakak">Developer</a>
        </p>
    </div>

    <div class="card">
        <div class="card-header">
            <h6>
                Latest Pasien membuat appointment
            </h6>
        </div>
        <div class="card-body">
            <table class="table table-responsive">
                <thead>
                    <tr>Nomor</tr>
                    <tr>Nama</tr>
                    <tr>Nomor</tr>
                    <tr>Nomor</tr>
                </thead>
            </table>
        </div>
        <div class="card-footer">
            <a href="{{ route('pasiens.create') }}">Tambah data pasien</a>
        </div>
    </div>
@endsection
