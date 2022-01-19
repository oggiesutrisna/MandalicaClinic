@extends('layouts.admin')
@section('title') Buat Appointment Pasien @endsection
@section('content')

<div class="card card-primary">
    <div class="card-header">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    </div>
    <form action="{{route('pasiens.store')}}" Method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="nama">Nama Pasien</label>
                        <input type="text" name="nama" class="form-control form-control-border" id="nama" placeholder="Nama Pasien" required>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="nama">Nomor Handphone</label>
                        <input type="text" name="nohp" class="form-control form-control-border" id="nohp" required>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="nama">Tempat, Tanggal Lahir (YYYY-MM-DD) </label>
                        <input type="text" name="ttl" class="form-control form-control-border" id="ttl" required>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="nama">Jenis Kelamin</label>
                        <input type="text" name="jeniskelamin" class="form-control form-control-border" id="jeniskelamin" required>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="nama">Tanggal Appointment</label>
                        <input type="text" name="dateappointment" class="form-control form-control-border" id="dateappointment" required>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="jenisappointment">Jenis Appointment</label>
                        <input type="text" name="jenisappointment" class="form-control form-control-border" id="jenisappointment" required>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="jenisappointment">Keterangan</label>
                <textarea type="text" name="keterangan" class="form-control form-control-border" rows="5" id="keterangan" required></textarea>
            </div>
    </div>
    <div class="card-footer">
        <button class="btn btn-primary" type="SUBMIT">Update Data Pasien</button>
        <a href="{{route('pasiens.index')}}" class="btn btn-warning" type="submit">Kembali</a>
    </div>
</form>
</div>

@endsection
